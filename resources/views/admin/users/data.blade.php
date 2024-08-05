<table class="table table-bordered users-table">
    <thead>
        <tr>    
            <th>No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($result as $users)
            <tr>
                <td>{{ ((($result->currentPage() - 1 ) * $result->perPage() ) + $loop->iteration) . '.' }}</td>
                <td>{{ ucfirst($users->firstname) }} {{ ucfirst($users->lastname) }}</td>
                <td>{{ $users->email }}</td>
                <td>
                    @switch($users->role)
                        @case(1)
                            <p class="mb-0">Admin</p>
                            @break
                        @case(2)
                            <p class="mb-0">HR</p>
                            @break
                        @case(3)
                            <p class="mb-0">Project Manager</p>
                    @endswitch
                </td>
                <td class="table-action">
                    <button type="button" class="edit-btn btn btn-primary editusers btn-icon" data-toggle="modal" data-target="#exampleModal" data-id="{{ encrypt($users->id) }}"><img src="{{ asset('/images/edit.png') }}" alt="icon"></button>
                    <a data-id="{{ encrypt($users->id) }}" type="button" class="delete-btn btn-icon" id="deleteUser"><img src="{{ asset('/images/delete.png') }}" alt="icon"></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div>
    {!! $result->links() !!}
</div>