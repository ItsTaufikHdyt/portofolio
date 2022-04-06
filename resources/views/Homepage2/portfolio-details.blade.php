<div>
    <div class="modal fade" id="showDetails{{$data->id}}" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document" style="background-color: #808080;">
            <div class="modal-content">
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
                <div class="modal-header" style="background-color: #808080;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="background-color: #232b2b;">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 portfolio-info">

                                <h3>Project information</h3>
                                <ul>
                                    <li><strong>Project Title</strong>: {{$data->portfolio_title}}</li>
                                    <li><strong>Category</strong>: {{$data->type}}</li>
                                    <li><strong>Client</strong>: {{$data->client}} </li>
                                    <li><strong>Project date</strong>: {{$data->project_date}}</li>
                                    <li><strong>Project URL</strong>: <a href="{{$data->project_url}}">{{$data->project_url}}</a></li>
                                </ul>

                                <p>
                                    {{$data->portfolio_desc}}
                                    <br>
                                    @foreach ($data->tags as $tags )
                                    <span class="badge badge-warning">{{$tags->tags_name}}</span>
                                    @endforeach
                                </p>

                            </div>
                            <div class="col-md-8 ml-auto">
                                @forelse ($data->images as $data2)
                                <img class="img-fluid" alt="Responsive image" src="{{'storage/portfolios/images/'.$data2->filename}}" alt="">
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>