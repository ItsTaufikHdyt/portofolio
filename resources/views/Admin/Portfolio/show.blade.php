<div>
    <div class="modal fade bs-example-modal-lg" id="portfolioShowModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
                <div class="modal-body">
                    @forelse ($portfolio as $show )
                    @forelse ($show->images as $data)
                    <form method="POST" action="{{Route('admin.destroyImagePortfolio',$data->id)}}">
                        @csrf
                        {{ method_field('DELETE')}}
                        <div class="modal-body text-center font-18">
                            <div class="row">
                                <div class="col-lg-8">
                                    <img width="500" height="500" src="{{(asset('storage/portofolio/images/'.$data->filename))}}" alt="">
                                </div>
                                <div class="col-lg-4">
                                    <input type="hidden" id="id" name="id" value="">
                                    <h4 class="padding-top-30 mb-30 weight-500">Are you sure you want to continue Delete?</h4>
                                    <div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto;">
                                        <div class="col-6">
                                            <button type="button" class="btn btn-secondary border-radius-100 btn-block confirmation-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
                                            NO
                                        </div>
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-primary border-radius-100 btn-block confirmation-btn"><i class="fa fa-check"></i></button>
                                            YES
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    @empty
                    <center><h2>Data Not Foud</h2></center>
                    @endforelse
                    @empty
                    <center><h2>Data Not Foud</h2></center>
                    @endforelse
                </div>
                <div class="modal-footer">
                    <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>