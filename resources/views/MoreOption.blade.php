{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/MoreOption.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.0/bootstrap-table.min.css">
    <link rel="stylesheet" href="//rawgit.com/vitalets/x-editable/master/dist/bootstrap3-editable/css/bootstrap-editable.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="https://unpkg.com/bootstrap-table@1.22.1/dist/bootstrap-table.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <h1>{{$question->question}}</h1>

        <!--ini buat value apa yang mau di export-->
        <div id="toolbar">
                <select class="form-control">
                    <option value="">Export Basic</option>
                    <option value="all">Export All</option>
                    <option value="selected">Export Selected</option>
                </select>
        </div>

        <!--NUmOfResponses-->
        <div class="information">
            <h1 id="responsesCount">Number of responses : <span>{{count($question->Answers)}}</span></h1>
        </div>
        
        

        <table id="table" 
            data-toggle="table"
            data-search="true"
            data-filter-control="true" 
            data-show-export="true"
            data-click-to-select="true"
            data-toolbar="#toolbar"
            class="table-responsive">
            <thead>
                <tr>
                    <th data-field="state" data-checkbox="true"></th>
                    <th data-field="ID" data-footer-formatter="idFormatter" data-filter-control="select" data-sortable="true">Submission ID</th>
                    <th data-field="name" data-filter-control="input" data-sortable="true">Name</th>
                    <th data-field="answer" data-filter-control="select" data-sortable="true">Respon</th>
                </tr>
            </thead>
            <tbody>
                <!--1 tr satu kolum-->
                @for ($i = 0; $i < count($question->Answers); $i++)
                    @php
                        $respon = $question->Answers[$i];
                        if ($identitas != null) {
                            $nama = $identitas->Answers[$i]->answer;
                        }
                    @endphp

                    <tr>
                        <td class="bs-checkbox "><input data-index="1" name="btSelectItem" type="checkbox"></td>
                        <td >{{$respon->subID}}</td>
                        
                        @if ($identitas != null)
                            <td>{{$nama}}</td>
                        @else
                            <td>-</td>
                        @endif

                        @if ($question->type == "file")
                            <td>
                                <a href="http://google.com">{{$respon->answer}}</a>
                            </td>
                        @elseif ($question->type == "ttd")
                            <td>
                                <img src="{{$respon->answer}}" alt="sadsa">
                            </td>
                        @else   
                            <td>{{$respon->answer}}</td>
                        @endif
                    </tr>
                @endfor
            </tbody>

        </table>
    </div>

    <script src="extensions/defer-url/bootstrap-table-defer-url.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.22.1/dist/bootstrap-table.min.js"></script>
    <script src="/MoreOption.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.0/bootstrap-table.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/editable/bootstrap-table-editable.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/export/bootstrap-table-export.js"></script>
    <script src="//rawgit.com/hhurz/tableExport.jquery.plugin/master/tableExport.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/filter-control/bootstrap-table-filter-control.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tableexport.jquery.plugin@1.10.21/tableExport.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tableexport.jquery.plugin@1.10.21/libs/jsPDF/jspdf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tableexport.jquery.plugin@1.10.21/libs/jsPDF-AutoTable/jspdf.plugin.autotable.js"></script>
    
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/MoreOption.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <h1>{{$question->question}}</h1>
    <table id="example" class="display table table-bordered table-hover nowrap" cellspacing="0" width="100%">
        <thead>
            <tr> 
                <th>ID</th>
                <th>Name</th>
                <th>Response</th>

            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>
                    <p id="responsesCount">Number of responses : <span>{{count($question->Answers)}}</span></p>
                </th>
                <th></th>
                <th></th>
                
            </tr>
        </tfoot>
            <tbody>
                <!--1 tr satu kolum-->
                @for ($i = 0; $i < count($question->Answers); $i++)
                    @php
                        $respon = $question->Answers[$i];
                        if ($identitas != null) {
                            $nama = $identitas->Answers[$i]->answer;
                        }
                    @endphp
                    <tr>
                        <td >{{$respon->subID}}</td>
                        
                        @if ($identitas != null)
                            <td>{{$nama}}</td>
                        @else
                            <td>-</td>
                        @endif

                        @if ($question->type == "file")
                            <td>
                                <a href="google.com">{{$respon->answer}}</a>
                            </td>
                        @elseif ($question->type == "ttd")
                            <td>
                                <img src="{{$respon->answer}}" alt="sadsa">
                            </td>
                        @else   
                            <td>{{$respon->answer}}</td>
                        @endif
                    </tr>
                @endfor
            </tbody>
    </table>
    
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="/MoreOption.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.7.0/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
    
    
</body>
</html>