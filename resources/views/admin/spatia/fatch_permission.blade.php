<div class="statbox widget box box-shadow">
    <div class="widget-header">
        <div class="row">
            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4>Permissions Tables</h4>
            </div>
        </div>
    </div>
    <div class="widget-content widget-content-area">
        <div class="table-responsive">
            <form action="{{route('admin.assingPermissions')}}" method="Post">
                @csrf
                <input type="hidden" name='roleid' value="{{ $selectRoles->id }}">
                <table class="table table-bordered mb-4">
                    <thead>
                        <tr>
                            <th>Permissions Name</th>
                            <th>Menu</th>
                            <th>Create</th>
                            <th>Read</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!isset($hasPermissionsName))
                        <tr>
                            <td colspan="7">No permission assigned</td>
                        </tr>
                        @else
                        @foreach ($hasPermissionsName as $pname)
                        <tr>
                            <th>
                                {{ $pname->name }}
                            </th>
                            @foreach ($pname->permissions as $permission)
                            <td>
                                <input type="checkbox" class="form-check" value="{{ $permission->name }}"
                                    name='rolepermissions[]'
                                    {{ $selectRoles->hasPermissionTo($permission->name) ? 'checked' : '' }}>
                            </td>
                            @endforeach
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
                <button class="btn btn-primary" type="submit"> Update Permission</button>
            </form>
        </div>
    </div>
</div>