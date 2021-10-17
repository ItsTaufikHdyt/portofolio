<div class="modal fade bs-example-modal-lg" id="updateAboutModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <form method="POST" action="{{Route('admin.updateEducation',$data->id)}}">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Update About</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Title</label>
                        <textarea name="title" class="form-control" placeholder="Title">{{$data->title}}</textarea>
                        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Period</label>
                        <input name="period" value="{{$data->period}}" class="form-control" type="text" placeholder="Period">
                        @error('period') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Location</label>
                        <input name="location" value="{{$data->location}}" class="form-control" type="text" placeholder="Location">
                        @error('location') <span class="text-danger">{{ $message }}</span>@enderror
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