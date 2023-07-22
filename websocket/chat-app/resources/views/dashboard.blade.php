<x-app-layout>   

    <section style="background-color: #eee;">
        <div class="container py-5">

            <div class="row">

            <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0">

                <h5 class="font-weight-bold mb-3 text-center text-lg-start">Members</h5>

                <div class="card">
                <div class="card-body">

                    @if(count($users) > 0)
                        <ul class="list-unstyled mb-0">

                        @foreach($users as $user)

                            <li class="p-2 border-bottom" id="user-list" style="background-color: #eee;">
                                <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                    @php 
                                        if(!empty($user->image)){
                                            $image = $user->image;
                                        }else{
                                            $image = 'image/dummy.jpeg';
                                        }                                    
                                    @endphp
                                    <img src="{{ asset($image) }}" alt="avatar"
                                    class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                    <div class="pt-1">
                                    <p class="fw-bold mb-0">{{ $user->name }}</p>
                                    <p class="small text-muted">Hello, Are you there?</p>
                                    </div>
                                </div>
                                <div class="pt-1">
                                    <p class="small text-muted mb-1">Just now</p>
                                    <span class="badge bg-danger float-end">1</span>
                                </div>
                                <b><sup id="{{ $user->id }} - status" class="offline-status">
                                    Offline
                                </sup></b>
                                </a> 
                            </li>
                        
                        @endforeach
                                        
                        </ul>

                    @else
                        <div class="text-danger">
                            <h6>Users Not Found</h6>
                        </div>
                    @endif
                </div>
                </div>

            </div>

            <div class="col-md-6 col-lg-7 col-xl-8 bg-white p-3" >
                <h1 class="text-center" id="heading1"> Chat App version 1 </h1>
                <div class="chat-box" style="overflow-y:auto; height:500px; ">
                    
                    <ul class="list-unstyled p-3" style="display:none">
                        <li class="d-flex justify-content-between mb-4">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp" alt="avatar"
                            class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60">
                            <div class="card">
                            <div class="card-header d-flex justify-content-between p-3">
                                <p class="fw-bold mb-0">Brad Pitt</p>
                                <p class="text-muted small mb-0"><i class="far fa-clock"></i> 12 mins ago</p>
                            </div>
                            <div class="card-body">
                                <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.
                                </p>
                            </div>
                            </div>
                        </li>
                        <li class="d-flex justify-content-between mb-4">
                            <div class="card w-100">
                            <div class="card-header d-flex justify-content-between p-3">
                                <p class="fw-bold mb-0">Lara Croft</p>
                                <p class="text-muted small mb-0"><i class="far fa-clock"></i> 13 mins ago</p>
                            </div>
                            <div class="card-body">
                                <p class="mb-0">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium.
                                </p>
                            </div>
                            </div>
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp" alt="avatar"
                            class="rounded-circle d-flex align-self-start ms-3 shadow-1-strong" width="60">
                        </li>
                        <li class="d-flex justify-content-between mb-4">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp" alt="avatar"
                            class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60">
                            <div class="card">
                            <div class="card-header d-flex justify-content-between p-3">
                                <p class="fw-bold mb-0">Brad Pitt</p>
                                <p class="text-muted small mb-0"><i class="far fa-clock"></i> 10 mins ago</p>
                            </div>
                            <div class="card-body">
                                <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.
                                </p>
                            </div>
                            </div>
                        </li>
                        <li class="bg-white mb-3">
                            <div class="form-outline">
                            <textarea class="form-control" id="textAreaExample2" rows="4"></textarea>
                            <label class="form-label" for="textAreaExample2">Message</label>
                            </div>
                        </li>
                        <button type="button" class="btn btn-info btn-rounded float-end">Send</button>
                    </ul>
                </div>               
            </div>

            </div>

        </div>
        </section>
</x-app-layout>
