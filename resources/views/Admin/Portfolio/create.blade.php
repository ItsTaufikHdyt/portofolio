<div class="modal fade bs-example-modal-lg" id="createPortfolioModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <form method="POST" action="{{Route('admin.storePortfolio')}}" enctype="multipart/form-data">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Create Portfolio</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label>Portofolio Title</label>
                        <input name="portfolio_title" class="form-control" type="text" placeholder="Portofolio Title">
                        @error('portfolio_title') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Portofolio Desc</label>
                        <textarea name="portfolio_desc" class="form-control"></textarea>
                        @error('portfolio_desc') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Project URL</label>
                        <input name="project_url" class="form-control" type="text" placeholder="Project URL">
                        @error('project_url') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Project Date</label>
                        <input name="project_date" class="form-control" type="date" placeholder="Project Date">
                        @error('project_date') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Client</label>
                        <input name="client" class="form-control" type="text" placeholder="Client">
                        @error('client') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Images</label>
                        <div class="custom-file">
                            <input type="file" name="images[]" multiple="multiple" class="custom-file-input">
                            <label class="custom-file-label">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Type</label>
                        <select class="form-control" name="type">
                            <option value="1">Web</option>
                            <option value="2">Mobile</option>
                            <option value="3">Dekstop</option>
                        </select>
                        @error('type') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Tags</label>
                        <select class="custom-select2 form-control" multiple="multiple" name="tags[]">
                            @forelse ($data_tags as $data)
                            <option value="{{$data->id}}">{{$data->tags_name}}</option>
                            @empty

                            @endforelse
                        </select>
                        @error('tags') <span class="text-danger">{{ $message }}</span>@enderror
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