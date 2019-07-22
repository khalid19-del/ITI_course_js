
<?php
 $title='Hostel';
 $content=' <div id="blog" class="page-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-heading">
                                <h4>Hostels</h4>
                                <div class="line-dec"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="blog-item b1">
                                <a href="about.php">
                                    <img src="img/image/bb8f773f-b865-455f-bdf6-eb2835200c17.jpg" onmouseout="outimage()"onmouseover="imagehover()" id="id1"alt="" onclick="alert("this hostel on the beach")>
                                    <div class="text-content">
                                        <h4>On beach</h4>
                                        <span>Posted: <em>George</em>  /  Date: <em>11 Aug 2017</em>  /  Category: <em>Design</em></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-item second-blog b2">
                                <div class="thumb">
                                    <img src="img/image/3ab8f121_original.jpg" alt=""onclick="alert("this hostel on the forest")>
                                    <div class="text-content">
                                        <h4>On Nature</h4>
                                        <span>Posted: <em>Kerley</em>  /  Date: <em>24 Jul 2017</em>  /  Category: <em>Artwork</em></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6"onclick="alert("this is village house")">
                            <div class="blog-item b3">
                                <div class="thumb">
                                    <img src="img/image/812e040f-6f6f-4cae-ad67-66c050b57c1f.jpg" alt="">
                                    <div class="text-content">
                                        <h4>village house</h4>
                                        <span>Posted: <em>Johnny</em>  /  Date: <em>16 Jul 2017</em>  /  Category: <em>Branding</em></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="col-md-12">
                            <div class="pop">
                            <span>✖</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis neque lacinia, porta nulla in, pellentesque ante. Vivamus in luctus mauris, non pharetra nibh. Morbi porttitor nisl sit amet velit pellentesque consequat. Etiam blandit libero turpis, id vehicula leo posuere a. In vel massa sollicitudin, tincidunt massa et, tincidunt ex.<br><br>Duis volutpat condimentum mollis. Sed eleifend libero ut viverra mattis. Suspendisse consectetur diam dolor, ut efficitur sem finibus vel. Vivamus tristique lacus sed dapibus varius. Fusce pharetra, quam quis congue pretium, ante dui imperdiet ipsum, eget lobortis leo leo sed diam.</p>
                            </div>
                            <div class="pop2">
                            <span>✖</span>
                            <p>Praesent purus leo, aliquet et efficitur id, pulvinar scelerisque enim. Maecenas a arcu sagittis, ornare ante ut, suscipit lectus. Donec dolor ipsum, laoreet nec metus non, tempus elementum massa. Donec non elit rhoncus, vestibulum enim sed, rutrum arcu. Vestibulum et purus ac diam condimentum volutpat sed ac est. Phasellus interdum tortor sem. Quisque sit amet condimentum sem. Phasellus luctus, felis sit amet pulvinar luctus, lectus dui mattis tellus, et placerat nunc ante at lacus.<br><br>Vivamus vestibulum, nisi sed placerat accumsan, felis felis venenatis tortor, vel condimentum arcu neque vel mauris. Donec a magna gravida, egestas libero non, molestie massa. Integer ut dolor eget magna congue gravida ut at arcu. Vivamus maximus neque quis luctus tempus. Vestibulum consequat a justo id feugiat. </p>
                            </div>
                            <div class="pop3">
                            <span>✖</span>
                            <p>Nullam rhoncus, orci et iaculis sodales, quam lectus suscipit augue, ut auctor massa dolor id metus. Nulla porta ut diam sodales dignissim. Ut sit amet augue vel justo laoreet dignissim. Maecenas vitae sollicitudin eros. In commodo placerat cursus. Quisque malesuada, nisl ac lacinia commodo, justo eros maximus ex, quis cursus odio erat at neque. Sed tincidunt eu dolor eget posuere.<br><br>Curabitur sit amet elit sit amet ligula eleifend aliquam quis eget quam. Mauris id mi nec justo venenatis tincidunt at ac massa. Sed et volutpat nunc. Quisque at urna quam. Duis sit amet neque eget quam iaculis iaculis. Quisque maximus porta elementum. Nam ac mattis erat, quis accumsan odio.</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>';
include 'home.php';
?>
<script>
  function imagehover(id){
      document.getElementById('id1').style.height="300px";
  }
  function outimage(){
      document.getElementById('id1').style.height="200px";
  }
</script>