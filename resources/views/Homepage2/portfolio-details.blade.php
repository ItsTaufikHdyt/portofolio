<!-- Modal -->
<div class="modal fade" id="exampleModal{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content rounded-15" style="background-color: #a6a6a6; border: white;">
            <div class="modal-header">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="background-color: hsl(240, 2%, 12%);">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 portfolio-info text-white">

                            <h3>Project information</h3>
                            <ul>
                                <li><strong>Project Title</strong>: {{$data->portfolio_title}}</li>
                                <li><strong>Category</strong>:
                                    @if($data->type === 1)
                                    Web
                                    @elseif($data->type === 2)
                                    Mobile
                                    @elseif($data->type === 3)
                                    Dekstop
                                    @endif
                                </li>
                                <li><strong>Client</strong>: {{$data->client}} </li>
                                <li><strong>Project date</strong>: {{$data->project_date}}</li>
                                <li><strong>Project URL</strong>: <a href="{{$data->project_url}}">{{$data->project_url}}</a></li>
                            </ul>

                            <p>
                                {{$data->portfolio_desc}}
                                <br>
                                @foreach ($data->tags as $tags )
                                <span class="badge bg-warning text-dark">{{$tags->tags_name}}</span>
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