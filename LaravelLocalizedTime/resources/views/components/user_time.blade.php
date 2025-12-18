<div class="h1 p-5">
    User created at: 
    {{ $user->created_at->langCountryDateWordsWithoutDay() }}
</div>
<div class="h4 px-5 mb-2">{{ LangCountry::emojiFlag() }}  {{ LangCountry::name() }}</div>