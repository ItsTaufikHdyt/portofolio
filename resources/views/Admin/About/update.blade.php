<div class="modal fade bs-example-modal-lg" id="updateAboutModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <form method="POST" action="{{Route('admin.updateAbout',$data->id)}}">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Update About</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Desc</label>
                        <textarea name="desc" class="form-control">{{$data->desc}}</textarea>
                        @error('desc') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Website</label>
                        <input name="website" value="{{$data->website}}" class="form-control" type="text" placeholder="Website">
                        @error('website') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input name="phone" value="{{$data->phone}}" class="form-control" type="text" placeholder="Phone">
                        @error('phone') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <input name="city" value="{{$data->city}}" class="form-control" type="text" placeholder="City">
                        @error('city') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" value="{{$data->email}}" class="form-control" type="email">
                        @error('city') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Freelance</label>
                        <select class="form-control" name="freelance">
                            <option value="1" {{$data->freelance == 1 ? 'selected' : ''}}>Available</option>
                            <option value="2" {{$data->freelance == 2 ? 'selected' : ''}}>Non Available</option>
                        </select>
                        @error('freelance') <span class="text-danger">{{ $message }}</span>@enderror
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