<div style="max-width: 600px; margin: 100px auto; min-width: 300px; font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif; font-size: 14px; background-color: #eee; min-height: 550px;     -webkit-font-smoothing: antialiased;">

    <header style="height: 260px; width: 100%; text-align: center; background-color: #337AB7; display: table">
        <h1 style="font-size: 28px; text-transform: capitalize; font-weight: 500; text-align: center; display: table-cell; vertical-align: middle; color: #ffffff">
            {{ config('pagekit.title', 'Page Title - PageKit.') }}
        </h1>
    </header>
    <section style="font-size: 16px; padding: 40px 40px 100px;">
        <h2 style="font-size: 22px; text-transform: capitalize; font-weight: 500">
            {{ $messages["name"] }}
        </h2>
        <hr style=" border: 0;  height: 1px;  background: #333; background-image: linear-gradient(to right, #ccc, #333, #ccc);">


        @foreach($messages as $message => $line)

            <div style="margin-bottom: 20px">
                <p style="margin-bottom: 10px; font-size: 15px">
                    <strong>{{ ucwords(str_replace("_", " ", $message)) }}</strong></p>
                <p>
                    {{ $line }}
                </p>
            </div>

        @endforeach
        <hr style=" border: 0;  height: 1px;  background: #333; background-image: linear-gradient(to right, #ccc, #333, #ccc);">
    </section>

</div>
