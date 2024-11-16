<div class="language-selector">
    <form action="{{ route('set.language') }}" method="POST">
        @csrf
        @php
            $language = app()->getLocale();
        @endphp

        <div class="language-container">
            <div class="language-flag">
                <img width="20" height="20" src="{{ config('app.flags_labels.' . $language) }}" alt="Bandeira de {{ $language }}" />
            </div>

            <select name="language" onchange="this.form.submit()" class="form-select">
                @foreach(config('app.available_locales') as $locale => $localeName)
                    <option value="{{ $locale }}" 
                        @if(app()->getLocale() === $locale) selected @endif
                    >
                        {{ $localeName }}
                    </option>
                @endforeach
            </select>
        </div>
    </form>
</div>

<style>
    .language-selector {
        display: inline-block;
        position: relative;
        background: none;
        border: none;
    }

    .language-container {
        display: flex;
        align-items: center;
        gap: 10px;
        background-color: #f9f9f9;
        border: 1px solid #e7e7e7;
        border-radius: 5px;
        padding-inline: 5px;
    }

    .language-flag {
        width: 24px;
        height: 24px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .form-select {
        padding: 5px;
        font-size: 16px;
        background: none;
        border: none;
        cursor: pointer;
        color: #929292;
    }

    .form-select:focus {
        outline: none;
        border-color: #007bff;
    }

    @media (max-width: 600px) {
        .language-flag {
            display: none;
        }
    }
</style>
