<link rel="stylesheet" href="/css/form.css">
<form class="mt-16" action="/search" method="GET">
    <label for="default-search" class="mb-2 text-sm font-medium text-black sr-only"></label>
    <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-7 pr-3 pointer-events-none">
            <svg aria-hidden="true" class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </div>
        <input type="search" name="query" id="default-search" class="block w-full p-5 text-xl text-gray-90 border-white bg-white" placeholder="What do you want to learn today?" required>
    </div>
</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#default-search').keyup(function() {
            var query = $(this).val();

            $.ajax({
                url: '/search',
                method: 'GET',
                data: { query: query },
                dataType: 'html',
                success: function(response) {
                    // Update the search results container with the response
                    $('#search-results-container').html(response);
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        });
    });
</script>
