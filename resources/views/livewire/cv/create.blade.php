<div>
    @section('header')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cv/Make') }}
        </h2>
    @endsection
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="form-section hobbies-section" id="hobbies-section">
                            <div class="section-wrapper">
                                <div class="section-header">
                                    INTERESTS AND HOBBIES
                                </div>
                                <div class="section-body">
                                    <livewire:components.form.input-fields :label="'hobbie'"/>
                                </div>
                                <div class="section-footer py-4">
                                    <button class="inline-block py-2 px-4 bg-indigo-300 rounded">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="form-section languages-section" id="languages-section">
                            <div class="section-wrapper">
                                <div class="section-header">
                                    LANGUAGE
                                </div>
                                <div class="section-body">
                                    <livewire:components.form.language-fields :label="'language'"/>
                                </div>
                                <div class="section-footer py-4">
                                    <button class="inline-block py-2 px-4 bg-indigo-300 rounded">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="form-section education-section" id="education-section">
                            <div class="section-wrapper">
                                <div class="section-header">
                                    EDUCATION
                                </div>
                                <div class="section-body">
                                    <livewire:components.form.education-fields :label="'eduction'"/>
                                </div>
                                <div class="section-footer py-4">
                                    <button class="inline-block py-2 px-4 bg-indigo-300 rounded">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="form-section experience-section" id="experience-section">
                            <div class="section-wrapper">
                                <div class="section-header">
                                    EXPERIENCES
                                </div>
                                <div class="section-body">
                                    <livewire:components.form.experience-fields :label="'experience'"/>
                                </div>
                                <div class="section-footer py-4">
                                    <button class="inline-block py-2 px-4 bg-indigo-300 rounded">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="form-section social-media-section" id="social-media-section">
                            <div class="section-wrapper">
                                <div class="section-header">
                                    ON THE WEB
                                </div>
                                <div class="section-body">
                                    <livewire:components.form.social-media-fields :label="'social link'"/>
                                </div>
                                <div class="section-footer py-4">
                                    <button class="inline-block py-2 px-4 bg-indigo-300 rounded">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="form-section address-section" id="address-section">
                            <div class="section-wrapper">
                                <div class="section-header">
                                    ADDRESS
                                </div>
                                <div class="section-body">
                                    <livewire:components.form.address-fields :label="'address'"/>
                                </div>
                                <div class="section-footer py-4">
                                    <button class="inline-block py-2 px-4 bg-indigo-300 rounded">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
