@php
    $user = 'Aachal';
    $fruits = ['mango', 'pineapple', 'grapes', 'orange', 'lemon'];
    $name = ['m', 'e', 'g', 'o', 'l'];

@endphp

<script>
// Correct way to pass PHP variable to JavaScript using json

// Passing PHP string ($user) to JS:
var data = @json($user);
console.log(data); // This will print 'Aachal'

// Passing PHP array ($fruits) to JS:
var fruits = @json($fruits);
console.log(fruits); // This will print the array: ['mango', 'pineapple', 'grapes', 'orange', 'lemon']

// Iterating through the array using forEach:
fruits.forEach(function(element) {
    console.log(element); // This will print each fruit
});

var letter= {{Js::from($name)}};    
console.log(letter);


</script>
