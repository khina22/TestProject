<style>
  table {
    width: 100%;
    border-collapse: collapse;
    font-family: Arial, sans-serif;
    margin-bottom: 20px;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 6px;
  }

  th, td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #ebebeb;
  }

  th {
    background-color: #f7f7f7;
    font-weight: bold;
    color: #333;
  }

  tbody tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  tbody tr:hover {
    background-color: #ebebeb;
  }

  td:last-child {
    text-align: center;
  }

  button {
    padding: 8px 16px;
    border: none;
    border-radius: 4px;
    background-color: #111;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  button:hover {
    background-color: #555;
  }

</style>

<body>
  <button type="button">
        <a href="/create_role_index">
        Create New </a> </button>

  <button type="button">
        <a href="/get_role_list/status/NA/active">
         List Active Role </a> </button>

  <button type="button">
        <a href="/get_role_list/status/NA/inactive">
        List Inactive Role </a> </button>

  <button type="button">
        <a href="/get_role_list/ALL/NA/ALL">
        List All Role </a> </button>

<table>
  <thead>
    <tr>
      <th>Sl No</th>
      <th>Name</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($response_data as $i => $data)
    <tr>
      <td>{{ $i+1 }}</td>
      <td>{{ $data->name }}</td>
      <td>{{ $data->status }}</td>
      <td>
      
        <button type="button">
        <a href= "/edit_role/{{$data->id}}">  
        Edit </a> </button>

        <button type="button">
        <a href= "/delete_role/{{$data->id}}">  
        Delete  </a></button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
