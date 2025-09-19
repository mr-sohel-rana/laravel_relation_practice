 <h1>test page</h1>


  <div >
    @foreach ($datas as $data)
       <div style="border:1px solid red; padding:10px; margin:4px">

          <h1>{{ $data['name'] }}</h1>
        <h2>{{ $data['dept'] }}</h2>
       </div>

    @endforeach
</div>

