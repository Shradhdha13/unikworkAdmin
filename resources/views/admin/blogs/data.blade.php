<table id="example2" class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Category</th>
        <th>Author Name</th>
        <th>SEO Title</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach($blogData as $blog)
            <tr>
                {{-- <td>{{ $loop->iteration }}</td> --}}
                <td>{{ ((($blogData->currentPage() - 1 ) * $blogData->perPage() ) + $loop->iteration) . '.' }}</td>
                <td>{{$blog->title}}</td>
                <td>{{ $blog->category->name ?? 'No Category' }}</td>
                <td>{{$blog->users->firstname}}</td>
                <td>{{$blog->SEO_title}}</td>
                <td>
                    @if ($blog->status == 1)
                     <span class="text-success bg-success">Active</span>
                    @else
                        <span class="text-danger bg-danger">Deactive</span>
                    @endif
                    {{-- {{$blog->status}} --}}
                </td>
                <td class="d-flex text-center"> 
                    <div class="ml-2"><a  href="{{route('edit-blog',['id'=>encrypt($blog->id)])}}" class="btn btn-primary edit-blog p3">
                        Edit {{-- <i class="mdi mdi-border-color d-block"></i> --}}
                    </a></div>

                    {{-- <div class="ml-2"><a href="{{route('delete-blog',['id'=>encrypt($blog->id)])}}" class="btn btn-primary delete-blog p3">
                        Delete 
                        //<i class="mdi mdi-delete d-block" class="text-center"></i>
                     </a></div> --}}
                     <div class="ml-2"><a data-id="{{ encrypt($blog->id) }}" type="button" class="btn btn-primary delete-blog p3" id="deleteBlog">
                        Delete{{-- <img src="{{ asset('/images/delete.png') }}" alt="icon"> --}}
                    </a></div>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
  <div>
    {!! $blogData->links() !!}
</div>