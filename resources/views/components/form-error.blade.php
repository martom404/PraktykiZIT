@props(['name'])

@error($name)
    <p class='text-sm text-red-500 font-semibolid mt-1'>{{ $message }}</p>
@enderror
