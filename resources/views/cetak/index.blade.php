

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- Table -->
        <div class="table-responsive">
            <table id="datatables" class="display table table-striped table-hover" cellspacing="0" width="100%">
                <thead class="table-primary">
                    <tr>
                        <th>id spp</th>
                        <th>nisn</th>
                        <th>tanggal</th>
                        <th>bulan</th>
                        <th>tahun</th>
                        <th>jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pembayaran as $item)
                        <tr>
                            <td>{{ $item->id_spp }}</td>
                            <td>{{ $item->nisn }}</td>
                            <td>{{ $item->tanggal }}</td>
                            <td>{{ $item->bulan }}</td>
                            <td>{{ $item->tahun }}</td>
                            <td>{{ $item->jumlah }}</td>
                          
                            </td>
                        </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
        <script>
            window.print();
          </script>

