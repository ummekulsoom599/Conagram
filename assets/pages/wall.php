
<?php 

global $user;

?>


    <div class="container col-9 rounded-0 d-flex justify-content-between">
        <div class="col-8">
            <div class="card mt-4">
                <div class="card-title d-flex justify-content-between  align-items-center">

                    <div class="d-flex align-items-center p-2">
                        <img src="assets/images/profile/pic1.jpg" alt="" height="30" class="rounded-circle border">&nbsp;&nbsp;kristal
                        Giri
                    </div>
                    <div class="p-2">
                        <i class="bi bi-three-dots-vertical"></i>
                    </div>
                </div>
                <img src="assets/images/profile/pic1.jpg" class="" alt="...">
                <h4 style="font-size: x-larger" class="p-2 border-bottom"><i class="bi bi-heart"></i>&nbsp;&nbsp;<i
                        class="bi bi-chat-left"></i>
                </h4>
                <div class="card-body">
                    Live life like it's your last day on Earth...

                </div>

                <div class="input-group p-2 border-top">
                    <input type="text" class="form-control rounded-0 border-0" placeholder="say something.."
                        aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-primary rounded-0 border-0" type="button"
                        id="button-addon2">Post</button>
                </div>

            </div>
            <div class="card mt-4">
                <div class="card-title d-flex justify-content-between  align-items-center">

                    <div class="d-flex align-items-center p-2">
                        <img src="assets/images/profile/pic3.jpg" alt="" height="30" class="rounded-circle border">&nbsp;&nbsp;Emma
                        Kristein
                    </div>
                    <div class="p-2">
                        <i class="bi bi-three-dots-vertical"></i>
                    </div>
                </div>
                <img src="assets/images/posts/L4.jpg" class="" alt="...">
                <h4 style="font-size: x-larger" class="p-2 border-bottom"><i class="bi bi-heart"></i>&nbsp;&nbsp;<i
                        class="bi bi-chat-left"></i>
                </h4>
                <div class="card-body">
                    You are not alone!

                </div>

                <div class="input-group p-2 border-top">
                    <input type="text" class="form-control rounded-0 border-0" placeholder="say something.."
                        aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-primary rounded-0 border-0" type="button"
                        id="button-addon2">Post</button>
                </div>

            </div>
            <div class="card mt-4">
                <div class="card-title d-flex justify-content-between  align-items-center">

                    <div class="d-flex align-items-center p-2">
                        <img src="assets/images/profile/profile7.jpg" alt="" height="30" class="rounded-circle border">&nbsp;&nbsp;Andrew
                        Charles
                    </div>
                    <div class="p-2">
                        <i class="bi bi-three-dots-vertical"></i>
                    </div>
                </div>
                <img src="assets/images/posts/L3.jpg" class="" alt="...">
                <h4 style="font-size: x-larger" class="p-2 border-bottom"><i class="bi bi-heart"></i>&nbsp;&nbsp;<i
                        class="bi bi-chat-left"></i>
                </h4>
                <div class="card-body">
                    No one can rewrite the stars...
                </div>

                <div class="input-group p-2 border-top">
                    <input type="text" class="form-control rounded-0 border-0" placeholder="say something.."
                        aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-primary rounded-0 border-0" type="button"
                        id="button-addon2">Post</button>
                </div>

            </div>
            <div class="card mt-4">
                <div class="card-title d-flex justify-content-between  align-items-center">

                    <div class="d-flex align-items-center p-2">
                        <img src="assets/images/profile/pic4.jpg" alt="" height="30" class="rounded-circle border">&nbsp;&nbsp;Robin
                        Peter
                    </div>
                    <div class="p-2">
                        <i class="bi bi-three-dots-vertical"></i>
                    </div>
                </div>
                <img src="assets/images/posts/L2.jpg" class="" alt="...">
                <h4 style="font-size: x-larger" class="p-2 border-bottom"><i class="bi bi-heart"></i>&nbsp;&nbsp;<i
                        class="bi bi-chat-left"></i>
                </h4>
                <div class="card-body">
                    As deep as the pacific ocean
                    "I wanna be yours!!"

                </div>

                <div class="input-group p-2 border-top">
                    <input type="text" class="form-control rounded-0 border-0" placeholder="say something.."
                        aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-primary rounded-0 border-0" type="button"
                        id="button-addon2">Post</button>
                </div>

            </div>
            <div class="card mt-4">
                <div class="card-title d-flex justify-content-between  align-items-center">

                    <div class="d-flex align-items-center p-2">
                        <img src="assets/images/profile/pic2.jpg" alt="" height="30" class="rounded-circle border">&nbsp;&nbsp;Monu
                        Giri
                    </div>
                    <div class="p-2">
                        <i class="bi bi-three-dots-vertical"></i>
                    </div>
                </div>
                <img src="assets/images/posts/L1.jpg" class="" alt="...">
                <h4 style="font-size: x-larger" class="p-2 border-bottom"><i class="bi bi-heart"></i>&nbsp;&nbsp;<i
                        class="bi bi-chat-left"></i>
                </h4>
                <div class="card-body">
                    "Chase the wind and touch the sky"

                </div>

                <div class="input-group p-2 border-top">
                    <input type="text" class="form-control rounded-0 border-0" placeholder="say something.."
                        aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-primary rounded-0 border-0" type="button"
                        id="button-addon2">Post</button>
                </div>

            </div>

        </div>

        <div class="col-4 mt-4 p-3">
            <div class="d-flex align-items-center p-2">
                <div><img src="assets/images/profile/<?$user['profile_picture']?>" alt="" height="60" class="rounded-circle border">
                </div>
                <div>&nbsp;&nbsp;&nbsp;</div>
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <h6 style="margin: 0px;"><?$user['first_name']?> <?$user['last_name']?></h6>
                    <p style="margin:0px;" class="text-muted"><?$user['first_name']?></p>
                </div>
            </div>
            <div>
                <h6 class="text-muted p-2">You Can follow Them</h6>
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center p-2">
                        <div><img src="assets/images/profile/profile2.jpg" alt="" height="40" class="rounded-circle border">
                        </div>
                        <div>&nbsp;&nbsp;</div>
                        <div class="d-flex flex-column justify-content-center">
                            <h6 style="margin: 0px;font-size: small;">Winston Orlando</h6>
                            <p style="margin:0px;font-size:small" class="text-muted">@notCurchill</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-sm btn-primary">Follow</button>

                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center p-2">
                        <div><img src="assets/images/profile/pic5.jpg" alt="" height="40" class="rounded-circle border">
                        </div>
                        <div>&nbsp;&nbsp;</div>
                        <div class="d-flex flex-column justify-content-center">
                            <h6 style="margin: 0px;font-size: small;">James charles</h6>
                            <p style="margin:0px;font-size:small" class="text-muted">@itsjamsworld</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-sm btn-primary">Follow</button>

                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center p-2">
                        <div><img src="assets/images/profile/profile4.jpg" alt="" height="40" class="rounded-circle border">
                        </div>
                        <div>&nbsp;&nbsp;</div>
                        <div class="d-flex flex-column justify-content-center">
                            <h6 style="margin: 0px;font-size: small;">Siri Bottom</h6>
                            <p style="margin:0px;font-size:small" class="text-muted">@siribottom34</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-sm btn-primary">Follow</button>

                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center p-2">
                        <div><img src="assets/images/profile/profile5.jpg" alt="" height="40" class="rounded-circle border">
                        </div>
                        <div>&nbsp;&nbsp;</div>
                        <div class="d-flex flex-column justify-content-center">
                            <h6 style="margin: 0px;font-size: small;">Angelika Johnson</h6>
                            <p style="margin:0px;font-size:small" class="text-muted">@ajohnson23</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-sm btn-primary">Follow</button>

                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center p-2">
                        <div><img src="assets/images/profile/profile6.jpg" alt="" height="40" class="rounded-circle border">
                        </div>
                        <div>&nbsp;&nbsp;</div>
                        <div class="d-flex flex-column justify-content-center">
                            <h6 style="margin: 0px;font-size: small;">Steve Jon</h6>
                            <p style="margin:0px;font-size:small" class="text-muted">@steve1998</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-sm btn-primary">Follow</button>

                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center p-2">
                        <div><img src="assets/images/profile/profile7.jpg" alt="" height="40" class="rounded-circle border">
                        </div>
                        <div>&nbsp;&nbsp;</div>
                        <div class="d-flex flex-column justify-content-center">
                            <h6 style="margin: 0px;font-size: small;">Edward Smith</h6>
                            <p style="margin:0px;font-size:small" class="text-muted">@edwardsm</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-sm btn-primary">Follow</button>

                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center p-2">
                        <div><img src="assets/images/profile/profile2.jpg" alt="" height="40" class="rounded-circle border">
                        </div>
                        <div>&nbsp;&nbsp;</div>
                        <div class="d-flex flex-column justify-content-center">
                            <h6 style="margin: 0px;font-size: small;">Mayank Sharma</h6>
                            <p style="margin:0px;font-size:small" class="text-muted">@mayankiscool</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-sm btn-primary" >Follow</button>

                    </div>
                </div>


            </div>
        </div>
    </div>
    