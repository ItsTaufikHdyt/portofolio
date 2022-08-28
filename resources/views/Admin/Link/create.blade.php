<div class="modal fade bs-example-modal-lg" id="createLinkModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <form method="POST" action="{{Route('admin.storeLink')}}" enctype="multipart/form-data">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Create Link</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    @csrf
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
                            <option value="amazon">amazon</option>
                            <option value="dev">dev</option>
                            <option value="facebook">facebook</option>
                            <option value="github">github</option>
                            <option value="google">google</option>
                            <option value="instagram">instagram</option>
                            <option value="linkedin">linkedin</option>
                            <option value="medium">medium</option>
                            <option value="paypal">paypal</option>
                            <option value="twitter">twitter</option>
                            <option value="youtube">youtube</option>
                        </select>
                        @error('type') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input name="title" class="form-control" type="text" placeholder="Title">
                        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Sub Title</label>
                        <input name="subtitle" class="form-control" type="text" placeholder="Sub Title">
                        @error('subtitle') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>url</label>
                        <input name="url" class="form-control" type="text" placeholder="URL">
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