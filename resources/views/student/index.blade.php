<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    {{-- foreach前先dd --}}

    {{-- @php
    dd($data);
    @endphp --}}

<div class="container mt-3">
  <h2>Hover Rows</h2>
  <p>The .table-hover class enables a hover state (grey background on mouse over) on table rows:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>NAME</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $value)
      <tr>
        <td>{{$value['id']}}</td>
        <td>{{$value['name']}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
