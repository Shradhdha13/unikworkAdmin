<style>
    .fix-width{
        width: 350px;
    }
</style>
<table id="example2" class="table table-bordered table-striped seo-table">
    <thead>
        <tr>    
            <th>No.</th>
            <th>Page Name</th>
            <th>Title Name</th>
            <th>Description</th>
            <th>Key word</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($result as $seo)
            <tr>
                <td>{{ ((($result->currentPage() - 1 ) * $result->perPage() ) + $loop->iteration) . '.' }}</td>
                <td>{{ $seo->page_name }}</td>
                <td class="fix-width">{{ $seo->title }}</td>
                <td class="fix-width">{{ $seo->description }}</td>
                <td class="fix-width">{{ $seo->key_word }}</td>                
                <td class="table-action">
                    {{-- <button type="button" class="edit-btn btn btn-primary editseo" data-toggle="modal" data-target="#exampleModal" data-id="{{ encrypt($seo->id) }}">
                         <img src="{{ asset('/images/edit.png') }}" alt="icon">
                    </button> --}}
                    <a class="edit-btn btn btn-primary editseo" data-toggle="modal" data-target="#exampleModal" data-id="{{ encrypt($seo->id) }}">
                        Edit{{-- <img src="{{ asset('/images/delete.png') }}" alt="icon"> --}}
                    </a>
                    <a data-id="{{ encrypt($seo->id) }}" type="button" class="btn btn-primary delete-btn" id="deleteSEO">
                        Delete{{-- <img src="{{ asset('/images/delete.png') }}" alt="icon"> --}}
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div>
    {!! $result->links() !!}
</div>