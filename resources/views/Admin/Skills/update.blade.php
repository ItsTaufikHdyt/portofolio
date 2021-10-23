<div class="modal fade bs-example-modal-lg" id="updateSkillsModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <form method="POST" action="{{Route('admin.updateSkills',$data->id)}}">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Update Skills</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input name="name" value="{{$data->name}}" class="form-control" type="text" placeholder="Name">
                        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Icon</label>
                        <input name="icon" value="{{$data->icon}}" class="form-control" type="text" placeholder="Icon">
                        @error('icon') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Level</label>
                        <select class="form-control" name="level">
                            <option value="1" {{$data->level == 1 ? 'selected' : ''}}>Beginner</option>
                            <option value="2" {{$data->level == 2 ? 'selected' : ''}}>Intermediate</option>
                            <option value="3" {{$data->level == 3 ? 'selected' : ''}}>Advanced</option>
                        </select>
                        @error('level') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>