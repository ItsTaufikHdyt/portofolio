<div class="modal fade bs-example-modal-lg" id="updateLinkModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <form method="POST" action="{{Route('admin.updateLink',$data->id)}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Update Skills</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Icon</label>
                        <div class="custom-file">
                            <input type="file" name="icon" multiple="multiple" class="custom-file-input">
                            <label class="custom-file-label">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Type</label>
                        <select class="form-control" name="type">
                            <option value="amazon" {{$data->level == 'amazon' ? 'selected' : ''}}>amazon</option>
                            <option value="dev" {{$data->level == 'dev' ? 'selected' : ''}}>dev</option>
                            <option value="facebook" {{$data->level == 'facebook' ? 'selected' : ''}}>facebook</option>
                            <option value="github" {{$data->level == 'github' ? 'selected' : ''}}>github</option>
                            <option value="google" {{$data->level == 'google' ? 'selected' : ''}}>google</option>
                            <option value="instagram" {{$data->level == 'instagram' ? 'selected' : ''}}>instagram</option>
                            <option value="linkedin" {{$data->level == 'linkedin' ? 'selected' : ''}}>linkedin</option>
                            <option value="medium" {{$data->level == 'medium' ? 'selected' : ''}}>medium</option>
                            <option value="paypal" {{$data->level == 'paypal' ? 'selected' : ''}}>paypal</option>
                            <option value="twitter" {{$data->level == 'twitter' ? 'selected' : ''}}>twitter</option>
                            <option value="youtube" {{$data->level == 'youtube' ? 'selected' : ''}}>youtube</option>
                            <option value="website" {{$data->level == 'website' ? 'selected' : ''}}>website</option>
                            <option value="trakteer" {{$data->level == 'trakteer' ? 'selected' : ''}}>trakteer</option>
                            <option value="saweria" {{$data->level == 'saweria' ? 'selected' : ''}}>saweria</option>
                            <option value="bmc" {{$data->level == 'bmc' ? 'selected' : ''}}>Buy Me A Coffee</option>
                        </select>
                        @error('type') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input name="title" value="{{$data->title}}" class="form-control" type="text" placeholder="Title">
                        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Sub Title</label>
                        <input name="subtitle" value="{{$data->subtitle}}" class="form-control" type="text" placeholder="Sub Title">
                        @error('subtitle') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>url</label>
                        <input name="url" value="{{$data->url}}" class="form-control" type="text" placeholder="URL">
                        @error('url') <span class="text-danger">{{ $message }}</span>@enderror
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