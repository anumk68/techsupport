<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Models\Setting;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    /**
     * Display the settings index page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $descriptionsettings = Setting::where('type', 'like', 'description_%')->get();
        $titlesettings = Setting::where('type', 'like', 'title_%')->get();
        $keywordsettings = Setting::where('type', 'like', 'keyword_%')->get();

        $contact = Setting::all();
        $sett = Setting::where('type', 'like', 'fields%')
            ->orWhere('type', 'like', 'links%')
            ->get();

        return view("admin.setting.index", compact('descriptionsettings', 'titlesettings', 'keywordsettings', 'sett', 'contact'));
    }

    /**
     * Handle image upload and save metadata.
     *
     * @param \Illuminate\Http\UploadedFile $file
     * @return int
     */
    protected function handleImage($file)
    {
        $arr = explode('.', $file->getClientOriginalName());

        $upload = new Upload();
        $upload->file_original_name = $arr[0];
        $upload->file_name = $file->store('images', 'public');
        $upload->user_id = auth()->id();
        $upload->extension = $file->getClientOriginalExtension();
        $upload->type = 'image';
        $upload->file_size = $file->getSize();
        $upload->save();

        return $upload->id;
    }

    /**
     * Check if the field is an image field.
     *
     * @param string $fieldName
     * @param \Illuminate\Http\Request $request
     * @return bool
     */
    protected function isImageField($fieldName, $request)
    {
        $imageFields = ['header_logo', 'footer_logo', 'user_image', 'profile_image', 'testimonial_image'];
        return in_array($fieldName, $imageFields) && $request->hasFile($fieldName);
    }

    /**
     * Update settings based on request data.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        foreach ($request->types as $key => $type) {
            if ($type == 'site_name') {
                $this->overWriteEnvFile('APP_NAME', $request[$type]);
            } elseif ($type == 'timezone') {
                $this->overWriteEnvFile('APP_TIMEZONE', $request[$type]);
            } else {
                if ($this->isImageField($type, $request)) {
                    $file = $request->file($type);
                    $uploadId = $this->handleImage($file);
                    $request[$type] = $uploadId;
                }

                $settings = Setting::where('type', $type)->first();

                if ($settings) {
                    $settings->value = gettype($request[$type]) == 'array'
                        ? json_encode($request[$type])
                        : $request[$type];
                    $settings->save();
                } else {
                    $settings = new Setting();
                    $settings->type = $type;
                    $settings->value = gettype($request[$type]) == 'array'
                        ? json_encode($request[$type])
                        : $request[$type];
                    $settings->save();
                }
            }
        }

        return back()->with('success', 'Settings updated successfully');
    }

    /**
     * Add a new setting.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function aboutt(Request $request)
    {
        $request->validate([
            'metaselect' => 'string|in:description_,title_,keyword_',
            'type' => 'string',
            'value' => 'string',
        ]);

        $prefix = $request->input('metaselect');
        $name = str_replace(' ', '_', $request->type);
        $prefixedName = $prefix . $name;
        $file_value = $request->value;

        $settings = new Setting();
        $settings->type = $prefixedName;
        $settings->value = $file_value;
        $settings->save();

        return redirect()->back()->with('success', 'Setting added successfully.');
    }

    /**
     * Update a specific setting by ID.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateSettingForm(Request $request, $id)
    {
        $request->validate([
            'value' => 'string',
        ]);

        $setting = Setting::findOrFail($id);
        $setting->value = $request->value;
        $setting->save();

        return redirect()->route('setting.index')->with('success', 'Setting updated successfully');
    }

    /**
     * Delete a specific setting by ID.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteSettingForm($id)
    {
        $setting = Setting::findOrFail($id);
        $setting->delete();

        return redirect()->back()->with('success', 'Setting has been deleted');
    }

    /**
     * Update footer settings.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function set_footer(Request $request)
    {
        $fields = $request->input('fields');
        $links = $request->input('links');

        foreach ($fields as $key => $value) {
            Setting::updateOrCreate(
                ['type' => "fields[$key]"],
                ['value' => $value]
            );
        }

        foreach ($links as $key => $value) {
            Setting::updateOrCreate(
                ['type' => "links[$key]"],
                ['value' => $value]
            );
        }

        return redirect()->route('setting.index')->with('success', 'Footer updated successfully');
    }

    /**
     * Display the case studies page.
     *
     * @return \Illuminate\View\View
     */
    public function case_study()
    {
        return view('frontend.case_studies');
    }

    /**
     * Show the edit setting form.
     *
     * @param int $id
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function editSettingForm($id)
    {
        $setting = Setting::find($id);

        if (!$setting) {
            return redirect()->route('metapage')->with('error', 'Setting not found');
        }

        return view('admin.settings.edit', ['setting' => $setting]);
    }

    /**
     * Update a setting by ID.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateSetting(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'type' => 'required|string',
            'value' => 'required|string',
        ]);

        $setting = Setting::find($request->input('id'));

        if (!$setting) {
            return redirect()->route('settings.index')->with('error', 'Setting not found');
        }

        $setting->value = $request->input('value');
        $setting->save();

        return redirect()->route('metaPage')->with('success', 'Setting updated successfully');
    }

    /**
     * Add a new meta setting.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function new_meta_add(Request $request)
    {
        $request->validate([
            'metaselect' => 'string|in:description_,title_,keyword_',
            'type' => 'string',
            'value' => 'string',
        ]);

        $prefix = $request->input('metaselect');
        $name = str_replace(' ', '_', $request->type);
        $prefixedName = $prefix . $name;

        $settings = new Setting();
        $settings->type = $prefixedName;
        $settings->value = $request->value;
        $settings->save();

        return redirect()->back()->with('success', 'Setting added successfully.');
    }

    /**
     * Display the meta page with settings.
     *
     * @return \Illuminate\View\View
     */
    public function metapage()
    {
        $descriptionsettings = Setting::where('type', 'like', 'description_%')->get();
        $titlesettings = Setting::where('type', 'like', 'title_%')->get();
        $keywordsettings = Setting::where('type', 'like', 'keyword_%')->get();

        $sett = Setting::where('type', 'like', 'fields%')
            ->orWhere('type', 'like', 'links%')
            ->get();

        $settings = Setting::all();

        return view("admin.settings.index", compact('descriptionsettings', 'titlesettings', 'keywordsettings', 'sett', 'settings'));
    }
}
