@extends('layout')

@section('content')
    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Forms</a></li>
                                <li class="breadcrumb-item" aria-current="page">Balloon</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Balloon</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->

            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ Classic-editor ] start -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Balloon Editor</h5>
                        </div>
                        <div class="card-body">
                            <div id="cke5-balloon-block-demo">
                                <h2>Walking the capitals of Europe: Warsaw</h2>
                                <figure class="media">
                                    <oembed url="https://www.youtube.com/watch?v=7YRyFvjA_a8"></oembed>
                                </figure>
                                <p>If you enjoyed my previous articles in which we discussed wandering around <a
                                        href="https://en.wikipedia.org/wiki/Copenhagen">Copenhagen</a> and <a
                                        href="https://en.wikipedia.org/wiki/Vilnius">Vilnius</a>, you’ll definitely love
                                    exploring <a href="https://en.wikipedia.org/wiki/Warsaw">Warsaw</a>.</p>
                                <h3>Time to put comfy sandals on!</h3>
                                <p>The best time to visit the city is July and August when it’s cool enough not to break a
                                    sweat and hot enough to enjoy summer. The city, which has quite a combination of both
                                    old and modern textures, is located by the river of Vistula.</p>
                                <p>The historic <strong>Old Town</strong>, reconstructed after World War II, with its late
                                    18th-century characteristics, is a must-see. You can start your walk from <strong>Nowy
                                        Świat Street</strong> which will take you straight to the Old Town.</p>
                                <p>Then you can go to the <strong>Powiśle</strong>area and take a walk on the newly
                                    renovated promenade on the riverfront. There are also lots of cafes, bars, and
                                    restaurants where you can shake off the exhaustion of the day. On Sundays, there are
                                    many parks where you can enjoy nature or listen to pianists from around the world
                                    playing Chopin.</p>
                                <p>For museum lovers, you can add these to your list:</p>
                                <ul>
                                    <li><a href="http://www.polin.pl/en">POLIN</a></li>
                                    <li><a href="http://www.1944.pl/en">Warsaw Uprising Museum</a></li>
                                    <li><a href="http://chopin.museum/en">Fryderyk Chopin Museum</a></li>
                                </ul>
                                <h3>Next destination</h3>
                                <p>We will go to Berlin and have a night walk in the city that never sleeps! Make sure you
                                    subscribe to our newsletter!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ Classic-editor ] end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->
@endsection

@push('form')
    <script src="{{ asset('/js/plugins/ckeditor/balloon/ckeditor.js') }}"></script>
    <script>
        (function() {
            BalloonEditor.create(document.querySelector('#cke5-balloon-block-demo')).catch((error) => {
                console.error(error);
            });
        })();
    </script>
@endpush
