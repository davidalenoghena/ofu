<form action="{{ route('internship.filter') }}" method="GET"> 
            @csrf   
            <div class="filter">
                <h3>Filter</h3>
                <select type="text" id="picker" name="picker[]" multiple="multiple"></select>
                <button type="submit" class="btn btn-primary">Apply</button>
            </div>
</form>
<div class="search">
    <form action="{{ route('internship.search') }}" method="GET">
        @csrf
        <div class="search-wrap">
            <input type="text" name="search" id="search" class="searchBox" placeholder="Search...">
            <button type="submit" class="searchButton">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </form>
</div>
<!-- Boostrap Multiselect JS -->
@section ('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
<script>
    $(document).ready(function() {
        var options = [{
                label: 'Eligibility',
                children: [{
                        label: '100 level',
                        title: 'Option 1',
                        value: '100 level'
                    },
                    {
                        label: '200 level',
                        title: 'Option 2',
                        value: '200 level'
                    },
                    {
                        label: '300 level',
                        title: 'Option 3',
                        value: '300 level'
                    },
                    {
                        label: '400 level',
                        title: 'Option 4',
                        value: '400 level'
                    },
                    {
                        label: '500 level',
                        title: 'Option 5',
                        value: '500 level'
                    }
                ]
            },
        ];

        $('#picker').multiselect({
            enableCollapsibleOptGroups: true
        });

        $('#picker').multiselect('dataprovider', options);
    });
</script>
@endsection