@push('after_styles')
    @include(backpack_view('base.recipe.crud.styles.info_style'))
@endpush

<!-- SUBTITLE -->
<h4 class="step-subtitle">{{ trans('crud.recipe.steps.info.sub_title') }}</h4>
<div class="youtube-tutorial-link">
    <p><i class="lab la-youtube"></i> Tutorial</p>
</div>

<!-- INPUTS -->
<div>
    <div class="row mb-3 mt-5">
        <div class="col-sm-3">
            {{-- <button id="confirm-crop" style="display: none;">Confirmar Corte</button> --}}
            <div class="image-upload">
                <input type="file" class="file-input" accept="image/*">
                <i class="las la-concierge-bell"></i>
                <div class="clear-icon">
                    <i class="las la-times"></i>
                </div>
            </div>
        </div>


        {{-- USando somente col do bootstrap --}}
        {{-- <div class="col-sm-9">
            <div>
                <!-- NAME -->
                <div class="mb-3">
                    @php
                        $field = 'recipe_name';
                        $info = old($field, '');
                        $value = isset($entry) ? $entry->name : $info;
                    @endphp
                    <label for="{{ $field }}" class="form-label">
                        {{ trans('crud.recipe.steps.info.name') }}
                    </label>
                    <input
                        type="text"
                        class="form-control form-recipe-input"
                        id="{{ $field }}"
                        name="{{ $field }}"
                        value="{{ $value }}"
                        placeholder="{{ trans('crud.recipe.fields.name_placeholder') }}"
                    >
                </div>

                 <!-- CATEGORY SELECT -->
                <div class="mb-3">
                    @php
                        $field = 'recipe_category_id';
                        $selected = old($field, isset($entry) ? $entry->recipe_category_id : '');
                    @endphp
                    <label for="{{ $field }}" class="form-label">
                        {{ trans('crud.recipe.fields.recipeCategory') }}
                    </label>
                    <select
                        class="form-control form-recipe-input select2"
                        id="{{ $field }}"
                        name="{{ $field }}"
                    >
                        <option value="">{{ trans('crud.recipe.fields.category_placeholder') }}</option>
                        @foreach ($categories as $id => $name)
                            <option value="{{ $id }}" {{ $selected == $id ? 'selected' : '' }}>
                                {{ $name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <label for="{{ $field }}" class="form-label">
                            {{ trans('crud.recipe.steps.info.portion') }}
                        </label>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            @php
                                $field = 'recipe_name';
                                $info = old($field, '');
                                $value = isset($entry) ? $entry->name : $info;
                            @endphp
                            <input
                                type="number"
                                class="form-control form-recipe-input"
                                id="{{ $field }}"
                                name="{{ $field }}"
                                value="{{ $value }}"
                                placeholder="{{ trans('crud.recipe.fields.portion_placeholder') }}"
                            >
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="mb-3">
                            @php
                                $field = 'portion_unit';
                                $selected = old($field, isset($entry) ? $entry->portion_unit : '');
                            @endphp
                            <select
                                class="form-control form-recipe-input"
                                id="{{ $field }}"
                                name="{{ $field }}"
                            >
                                @foreach ($portionUnits as $key => $label)
                                    <option value="{{ $key }}" {{ $selected == $key ? 'selected' : '' }}>
                                        {{ $label }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-sm-12 mb-3 mt-5">
            <div class="row">
                <div class="col-sm-2">
                    <!-- PREPARATION TIME -->
                    <div class="mb-3">
                        @php
                            $field = 'preparation_time';
                            $info = old($field, '');
                            $value = isset($entry) ? $entry->preparation_time : $info;
                        @endphp
                        <label for="{{ $field }}" class="form-label">
                            {{ trans('crud.recipe.steps.info.preparation_time') }}
                        </label>
                        <input
                            type="text"
                            class="form-control form-recipe-input"
                            id="{{ $field }}"
                            name="{{ $field }}"
                            value="{{ $value }}"
                            placeholder="{{ trans('crud.recipe.fields.preparation_time_placeholder') }}"
                        >
                    </div>
                </div>
                <div class="col-sm-5">
                  
                        <label for="{{ $field }}" class="form-label">
                            {{ trans('crud.recipe.steps.info.weight') }}
                        </label>
                    
                    <!-- WEIGHT UNIT -->
                    <div class="mb-3">
                        @php
                            $field = 'weight';
                            $info = old($field, '');
                            $value = isset($entry) ? $entry->weight : $info;
                        @endphp
                        <input
                            type="number"
                            class="form-control form-recipe-input"
                            id="{{ $field }}"
                            name="{{ $field }}"
                            value="{{ $value }}"
                            placeholder="{{ trans('crud.recipe.fields.weight_placeholder') }}"
                        >
                    </div>
                    
                </div>
    
                <div class="col-sm-5">
                    
                    <div class="mb-3" style="position: relative; top: 32px;">
                        @php
                            $field = 'weight_unit';
                            $selected = old($field, isset($entry) ? $entry->weight_unit : '');
                        @endphp
                        <select
                            class="form-control form-recipe-input"
                            id="{{ $field }}"
                            name="{{ $field }}"
                        >
                            @foreach ($weightUnits as $key => $label)
                                <option value="{{ $key }}" {{ $selected == $key ? 'selected' : '' }}>
                                    {{ $label }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div> --}}

        {{-- Fim col bootstrap --}}



        <!-- CENTRALIZANDO AO CENTRO -->
        <div class="col-sm-9 d-flex flex-column align-items-center">
            <div class="form-wrapper">
                <!-- NAME -->
                <div class="mb-3">
                    @php
                        $field = 'recipe_name';
                        $info = old($field, '');
                        $value = isset($entry) ? $entry->name : $info;
                    @endphp
                    <label for="{{ $field }}" class="form-label">
                        {{ trans('crud.recipe.steps.info.name') }}
                    </label>
                    <input
                        type="text"
                        class="form-control form-recipe-input"
                        id="{{ $field }}"
                        name="{{ $field }}"
                        value="{{ $value }}"
                        placeholder="{{ trans('crud.recipe.fields.name_placeholder') }}"
                    >
                </div>
        
                <!-- CATEGORY SELECT -->
                <div class="mb-3">
                    @php
                        $field = 'recipe_category_id';
                        $selected = old($field, isset($entry) ? $entry->recipe_category_id : '');
                    @endphp
                    <label for="{{ $field }}" class="form-label">
                        {{ trans('crud.recipe.fields.recipeCategory') }}
                    </label>
                    <select
                        class="form-control form-recipe-input select2"
                        id="{{ $field }}"
                        name="{{ $field }}"
                    >
                        <option value="">{{ trans('crud.recipe.fields.category_placeholder') }}</option>
                        @foreach ($categories as $id => $name)
                            <option value="{{ $id }}" {{ $selected == $id ? 'selected' : '' }}>
                                {{ $name }}
                            </option>
                        @endforeach
                    </select>
                </div>
        
                <div class="row">
                    <div class="col-sm-12">
                        <label for="{{ $field }}" class="form-label">
                            {{ trans('crud.recipe.steps.info.portion') }}
                        </label>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            @php
                                $field = 'recipe_name';
                                $info = old($field, '');
                                $value = isset($entry) ? $entry->name : $info;
                            @endphp
                            <input
                                type="number"
                                class="form-control form-recipe-input"
                                id="{{ $field }}"
                                name="{{ $field }}"
                                value="{{ $value }}"
                                placeholder="{{ trans('crud.recipe.fields.portion_placeholder') }}"
                            >
                        </div>
                    </div>
        
                    <div class="col-sm-6">
                        <div class="mb-3">
                            @php
                                $field = 'portion_unit';
                                $selected = old($field, isset($entry) ? $entry->portion_unit : '');
                            @endphp
                            <select
                                class="form-control form-recipe-input"
                                id="{{ $field }}"
                                name="{{ $field }}"
                            >
                                @foreach ($portionUnits as $key => $label)
                                    <option value="{{ $key }}" {{ $selected == $key ? 'selected' : '' }}>
                                        {{ $label }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-3 mt-3">
           <!-- PREPARATION TIME -->
            <div class="mb-3 top-image">
                @php
                    $field = 'preparation_time';
                    $info = old($field, '');
                    $value = isset($entry) ? $entry->preparation_time : $info;
                @endphp
                <label for="{{ $field }}" class="form-label">
                    {{ trans('crud.recipe.steps.info.preparation_time') }}
                </label>
                <input
                    type="text"
                    class="form-control form-recipe-input"
                    id="{{ $field }}"
                    name="{{ $field }}"
                    value="{{ $value }}"
                    placeholder="{{ trans('crud.recipe.fields.preparation_time_placeholder') }}"
                >
            </div>
        </div>


        <div class="col-sm-9 d-flex flex-column align-items-center mt-3">
            <div class="form-wrapper">
                <!-- WEIGHT UNIT -->
                <div class="row">
                    <div class="mb-3 col-sm-6">
                        @php
                            $field = 'weight';
                            $info = old($field, '');
                            $value = isset($entry) ? $entry->weight : $info;
                        @endphp
                         <label for="{{ $field }}" class="form-label">
                            {{ trans('crud.recipe.steps.info.preparation_time') }}
                        </label>
                        <input
                            type="number"
                            class="form-control form-recipe-input"
                            id="{{ $field }}"
                            name="{{ $field }}"
                            value="{{ $value }}"
                            placeholder="{{ trans('crud.recipe.fields.weight_placeholder') }}"
                        >
                    </div>
    
                    <div class="mb-3 col-sm-6"  style="position: relative; top: 32px;">
                        @php
                            $field = 'weight_unit';
                            $selected = old($field, isset($entry) ? $entry->weight_unit : '');
                        @endphp
                        <select
                            class="form-control form-recipe-input"
                            id="{{ $field }}"
                            name="{{ $field }}"
                        >
                            @foreach ($weightUnits as $key => $label)
                                <option value="{{ $key }}" {{ $selected == $key ? 'selected' : '' }}>
                                    {{ $label }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

@include(backpack_view('base.recipe.crud.modals.cropp'))

<!-- ACTIONS -->
<div class="d-flex justify-content-between align-items-center mt-5">
    <button type="button" class="btn btn-primary m-0 d-flex align-items-center" id="next-1">
        <span>{{ trans('crud.global.next_step') }}</span>
        <i class="las la-chevron-circle-right ml-2"></i>
    </button>

    <div class="need-help open-chat" title="{{ trans('crud.global.need_help') }}">
        <i class="las la-question-circle"></i>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        let cropper = null;
        const fileInput = document.querySelector('.file-input');
        const imageUpload = document.querySelector('.image-upload');
        const clearIcon = document.querySelector('.clear-icon');
        const icon = imageUpload.querySelector('i');

        const imagePreview = document.getElementById('imagePreview');
        const confirmCrop = document.getElementById('confirmCrop');
        const cancelCrop = document.getElementById('cancelCrop');

        // Função para limpar o input
        function resetImageUpload() {
            fileInput.value = '';
            imageUpload.style.backgroundImage = '';
            imageUpload.style.backgroundColor = '#FFF';
            icon.style.display = 'flex';
            imageUpload.classList.remove('has-image');
        }

        // Função para abrir o modal de corte
        function openCropperModal(imageSrc) {
            imagePreview.src = imageSrc;

            jQuery.noConflict();
            $('#cropperModal').modal({
                backdrop: false,
                keyboard: false,
            });

            if (cropper) cropper.destroy();

            cropper = new Cropper(imagePreview, {
                aspectRatio: NaN,
                viewMode: 1,
                dragMode: 'move',
                zoomable: true,
                scalable: true,
                cropBoxMovable: true,
                cropBoxResizable: true,
            });
        }

        // Ação para o usuário escolher uma imagem
        fileInput.addEventListener('change', function () {
            const file = this.files[0];
            if (!file) return;

            const reader = new FileReader();
            reader.onload = (e) => openCropperModal(e.target.result);
            reader.readAsDataURL(file);
        });

        // Confirmando o Corte
        confirmCrop.addEventListener('click', function () {
            if (!cropper) return;

            const croppedCanvas = cropper.getCroppedCanvas();
            const croppedImage = croppedCanvas.toDataURL();

            // Aplica a imagem cortada no input original
            imageUpload.style.backgroundImage = `url(${croppedImage})`;
            imageUpload.style.backgroundSize = 'contain';
            imageUpload.style.backgroundPosition = 'center';
            imageUpload.style.backgroundRepeat = 'no-repeat';
            imageUpload.classList.add('has-image');

            $('#cropperModal').modal('hide');
        });

        // Cancelar Corte
        cancelCrop.addEventListener('click', function () {
            $('#cropperModal').modal('hide');
            resetImageUpload();
        });

        // Limpar a imagem
        clearIcon.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            resetImageUpload();
        });
    });
</script>
