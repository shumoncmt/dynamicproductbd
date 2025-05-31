@include ('master.header')


<section class="diff-offer-wrapper">
<div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-8 service-info" style="margin-top:50px;">
         <div class="item"><a href={{Route('electricmotor')}} class="post-image view image_hover">			<img src= "{{ asset('img/product/Dynamic-pump.jpg')}}" alt="" class="img-responsive zoom_img_effect"></a><a href={{Route('electricmotor')}}>
               </a>
            </div>
        </div>
        <div class="col-md-6 col-sm-8" style="margin-top: 50px; margin-left:15px">
            <h2>High Efficient Three-Phase Asynchronous Motor </h2>
            <span><img src="{{ asset('img/icon/icon.png')}}" alt=""></span><span><img src="{{ asset('img/icon/icon.png')}}" alt=""></span><span><img src="{{ asset('img/icon/icon.png')}}" alt=""></span><span><img src="{{ asset('img/icon/icon.png')}}" alt=""></span><span><img src="{{ asset('img/icon/icon.png')}}" alt=""></span>
           
            <ul>
              <li>IE3 efficiency level three-phase asynchronous motor.</li>
              <li>Power range 0.75kw ~ 315kw (Customizable).</li>
              <li>Voltage: 380V (Customizable).</li>
            </ul>
            <button type="button" class="btn btn-outline-success"  style="margin:4px;"> <a href="#">Inquire Now </a>  </button> <button type="button" class="btn btn-outline-success"> <a href="#"> Next Product </a></button>

        </div>
    </div>
  </div>
   
<div class="container my-5">
  <div class="additional-details my-5 ">
   <h2>Product Details</h2>
        <!-- Nav pills -->
        <ul class="nav nav-tabs justify-content-left">
            <li class="nav-tabs">
                <a class="nav-link active" data-toggle="tab" data-bs-toggle="tab" href="#home"> Description</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" data-bs-toggle="tab" href="#menu1"> Specification</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" data-bs-toggle="tab" href="#menu2">Reviews </a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content mt-4 mb-3">
            <div class="tab-pane container active" id="home">
                <div class="description">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident magni assumenda consectetur facere eius. Minus reprehenderit placeat ullam vel ab eaque sequi impedit, ipsum soluta temporibus fugit ipsa. Dolor libero modi molestiae dicta, vitae minus laborum error cum consequatur autem minima eveniet porro obcaecati quibusdam possimus eos, debitis sint magnam, explicabo accusantium aspernatur ipsa repellat tempore nihil. Cum placeat voluptate dignissimos dicta harum consectetur, nemo debitis tempore. Quod culpa perspiciatis unde natus. Modi expedita, ab repellendus reiciendis sed voluptate, culpa laborum ad, consectetur quas tempora quo? Quibusdam doloribus magnam maxime, accusamus officiis odit reiciendis labore laudantium. Molestiae corporis temporibus ad?
                </div>
            </div>
            <div class="tab-pane container fade" id="menu1">
                <div class="review">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident magni assumenda consectetur facere eius. Minus reprehenderit placeat ullam vel ab eaque sequi impedit, ipsum soluta temporibus fugit ipsa. Dolor libero modi molestiae dicta, vitae minus laborum error cum consequatur autem minima eveniet porro obcaecati quibusdam possimus eos, debitis sint magnam, explicabo accusantium aspernatur ipsa repellat tempore nihil. Cum placeat voluptate dignissimos dicta harum consectetur, nemo debitis tempore. Quod culpa perspiciatis unde natus. Modi expedita, ab repellendus reiciendis sed voluptate, culpa laborum ad, consectetur quas tempora quo? Quibusdam doloribus magnam maxime, accusamus officiis odit reiciendis labore laudantium. Molestiae corporis temporibus ad?</p>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First</th>
                          <th scope="col">Last</th>
                          <th scope="col">Handle</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td colspan="2">Larry the Bird</td>
                          <td>@twitter</td>
                        </tr>
                      </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane container fade" id="menu2">
                <div class="specification">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident magni assumenda consectetur facere eius. Minus reprehenderit placeat ullam vel ab eaque sequi impedit, ipsum soluta temporibus fugit ipsa. Dolor libero modi molestiae dicta, vitae minus laborum error cum consequatur autem minima eveniet porro obcaecati quibusdam possimus eos, debitis sint magnam, explicabo accusantium aspernatur ipsa repellat tempore nihil. Cum placeat voluptate dignissimos dicta harum consectetur, nemo debitis tempore. Quod culpa perspiciatis unde natus. Modi expedita, ab repellendus reiciendis sed voluptate, culpa laborum ad, consectetur quas tempora quo? Quibusdam doloribus magnam maxime, accusamus officiis odit reiciendis labore laudantium. Molestiae corporis temporibus ad?</p>
                </div>
            </div>
        </div>
    </div>
 

<div class="row ">
        <h2 style="margin-bottom:10px; margin-top:25px">Related Product</h2> 
        <div class="row">
          <div class="col-md-3 col-sm-8 service-info">
            <div class="item"><a href={{Route('electricmotor')}} class="post-image view image_hover">			<img src= "{{ asset('img/product/Dynamic-Motor.png')}}" alt="" class="img-responsive zoom_img_effect"></a><a href={{Route('electricmotor')}}>
                <h4>Dynamic Motor</h4></a>
              <p style="text-align:justify" >Dynamic Motors strives to find you the best deals in the pre-owned vehicle market. As a company, we have years of experience and expertise.</p>
              <h6><a href={{Route('electricmotor')}}>Read more</a></h6>
            </div>
          </div>
          <div class="col-md-3 col-sm-8 service-info">
            <div class="item"><a href={{Route('electricmotor')}} class="post-image view image_hover">			<img src="{{ asset('img/product/Dynamic-Motor.png')}}" alt="" class="img-responsive zoom_img_effect"></a><a href={{Route('electricmotor')}}>
                <h4>Dynamic Motor</h4></a>
              <p style="text-align:justify" >Dynamic Motors strives to find you the best deals in the pre-owned vehicle market. As a company, we have years of experience and expertise.</p>
              <h6><a href={{Route('electricmotor')}}>Read more</a></h6>
            </div>
          </div>
          <div class="col-md-3 col-sm-8 service-info">
            <div class="item"><a href={{Route('roandufmembrane')}} class="post-image view image_hover"><img src="{{ asset('img/product/Dynamic-Ro-membrane.jpg')}}" alt="" class="img-responsive zoom_img_effect"></a><a href={{Route('roandufmembrane')}}>
                <h4>Dynamic RO Membrane</h4></a>
              <p style="text-align:justify">There are many applications for RO, including water and wastewater treatment, food and beverage processing, and pharmaceutical production.</p>
              <h6><a href={{Route('roandufmembrane')}}>Read more</a></h6>
            </div>
          </div>
          <div class="col-md-3 col-sm-8 service-info">
            <div class="item"><a href={{Route('industrialpump')}} class="post-image view image_hover">		<img src= "{{ asset('img/product/Dynamic-pump.jpg')}}" alt="" class="img-responsive zoom_img_effect"></a><a href={{Route('industrialpump')}}>
                <h4>Dynamic Pump</h4></a>
              <p style="text-align:justify">Dynamic pumps use kinetic energy to move liquids, like water and oil, from a lower to a higher pressure.</p>
              <h6><a href={{Route('industrialpump')}}>Read more</a></h6>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-8 service-info">
            <div class="item"><a href={{Route('blower')}} class="post-image view image_hover"><img src= "{{ asset('img/product/Dynamic-Blower.jpg')}}" alt="" class="img-responsive zoom_img_effect"></a><a href={{Route('blower')}}>
                <h4>Dynamic Blower</h4></a>
              <p style="text-align:justify">Roots blowers operate by trapping a fixed amount of fluid or gas and expelling it against the system's pressure.</p>
              <h6><a href={{Route('blower')}}>Read more</a></h6>
            </div>
          </div>
          <div class="col-md-3 col-sm-8 service-info">
            <div class="item"><a href={{Route('frpvessel')}} class="post-image view image_hover"><img src="{{ asset('img/product/FRP-Vessel.jpg')}}"  alt="" class="img-responsive zoom_img_effect"></a><a href={{Route('frpvessel')}}>
                <h4>Dynamic Vessel</h4></a>
              <p style="text-align:justify">FRP is an updated composite material used for chemical plant appliances and equipment, including vessels and tanks.</p>
              <h6><a href={{Route('frpvessel')}}>Read more</a></h6>
            </div>
          </div>
          <div class="col-md-3 col-sm-8 service-info">
            <div class="item"><a href={{Route('electromageneticflowmeter')}} class="post-image view image_hover"><img src= "{{ asset('img/product/Flow-meter.jpg')}}" alt="" class="img-responsive zoom_img_effect"></a><a href={{Route('electromageneticflowmeter')}}>
                <h4>Dynamic Flow Meter</h4></a>
              <p style="text-align:justify">Dynamic Flow Computers is one of the main global providers of advanced flow measurement solutions.</p>
              <h6><a href={{Route('electromageneticflowmeter')}}>Read more</a></h6>
            </div>
          </div>
          <div class="col-md-3 col-sm-8 service-info">
            <div class="item"><a href={{Route('electromageneticflowmeter')}} class="post-image view image_hover"><img src= "{{ asset('img/product/Flow-meter.jpg')}}" alt="" class="img-responsive zoom_img_effect"></a><a href={{Route('electromageneticflowmeter')}}>
                <h4>Dynamic Flow Meter</h4></a>
              <p style="text-align:justify">Dynamic Flow Computers is one of the main global providers of advanced flow measurement solutions.</p>
              <h6><a href={{Route('electromageneticflowmeter')}}>Read more</a></h6>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>









@include ('master.footer')