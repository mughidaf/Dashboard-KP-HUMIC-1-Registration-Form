<!DOCTYPE html>
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
        <h1>The Question</h1>

        <!--ini buat value apa yang mau di export-->
        <div id="toolbar">
                <select class="form-control">
                        <option value="all">Export All</option>
                        <option value="selected">Export Selected</option>
                </select>
        </div>

        <!--NUmOfResponses-->
        <div class="information">
            <h1 id="responsesCount">Number of responses : <span>0</span></h1>
            <button onclick="updateResponsesCount()">Update Count</button>
        </div>
        
        <table id="table"   
                    data-toggle="table"
                    data-height="460"
                    data-search="true"
                    data-filter-control="true" 
                    data-show-export="true"
                    data-show-footer="true"
                    data-pagination="true"
                    data-total-field="count"
                    data-toolbar="#toolbar"
                    data-show-refresh="true"
                    data-data-field="items">
            <thead>
                <!--data-filter-control="". itu buat tipe buat nyari data yang sama, ada input sama select -->
                <tr>
                    <th data-field="state" data-checkbox="true"></th>
                    <th data-field="ID" data-footer-formatter="idFormatter" data-filter-control="select" data-sortable="true">ID User</th>
                    <th data-field="name" data-filter-control="input" data-sortable="true">Name</th>
                    <th data-field="answer" data-filter-control="select" data-sortable="true">Answer</th>
                </tr>
            </thead>
            <tbody>
                <!--1 tr satu kolum-->
                <tr>
                    <td class="bs-checkbox "><input data-index="1" name="btSelectItem" type="checkbox"></td>
                    <td>01</td>
                    <td>Pari</td>
                    <td>i need more boolet</td>
                </tr>

                <tr>
                    <td class="bs-checkbox "><input data-index="1" name="btSelectItem" type="checkbox"></td>
                    <td>01</td>
                    <td>Pari</td>
                    <td>i need more boolet</td>
                </tr>

                <tr>
                    <td class="bs-checkbox "><input data-index="1" name="btSelectItem" type="checkbox"></td>
                    <td>02</td>
                    <td>Ghiyat</td>
                    <td>i need more boolet</td>
                </tr>

                <tr>
                    <td class="bs-checkbox "><input data-index="2" name="btSelectItem" type="checkbox"></td>
                    <td>03</td>
                    <td>Ghiyat</td>
                    <td>i need bigger weapon</td>
                </tr>

                <tr>
                    <td class="bs-checkbox "><input data-index="2" name="btSelectItem" type="checkbox"></td>
                    <td>03</td>
                    <td>Ghiyat</td>
                    <td>i need bigger weapon</td>
                </tr>

                <tr>
                    <td class="bs-checkbox "><input data-index="2" name="btSelectItem" type="checkbox"></td>
                    <td>03</td>
                    <td>Ghiyat</td>
                    <td>i need bigger weapon</td>
                </tr>

                <tr>
                    <td class="bs-checkbox "><input data-index="2" name="btSelectItem" type="checkbox"></td>
                    <td>03</td>
                    <td>Ghiyat</td>
                    <td>i need bigger weapon</td>
                </tr>

                <tr>
                    <td class="bs-checkbox "><input data-index="2" name="btSelectItem" type="checkbox"></td>
                    <td>03</td>
                    <td>Ghiyat</td>
                    <td>i need bigger weapon</td>
                </tr>

                <tr>
                    <td class="bs-checkbox "><input data-index="2" name="btSelectItem" type="checkbox"></td>
                    <td>03</td>
                    <td>Ghiyat</td>
                    <td>i need bigger weapon</td>
                </tr>

                <tr>
                    <td class="bs-checkbox "><input data-index="2" name="btSelectItem" type="checkbox"></td>
                    <td>03</td>
                    <td>Ghiyat</td>
                    <td>i need bigger weapon</td>
                </tr>

                <tr>
                    <td class="bs-checkbox "><input data-index="2" name="btSelectItem" type="checkbox"></td>
                    <td>03</td>
                    <td>Ghiyat</td>
                    <td>i need bigger weapon</td>
                </tr>

                <tr>
                    <td class="bs-checkbox "><input data-index="2" name="btSelectItem" type="checkbox"></td>
                    <td>03</td>
                    <td>Ghiyat</td>
                    <td>i need bigger weapon</td>
                </tr>

                <tr>
                    <td class="bs-checkbox "><input data-index="2" name="btSelectItem" type="checkbox"></td>
                    <td>03</td>
                    <td>Ghiyat</td>
                    <td>i need bigger weapon</td>
                </tr>

                <tr>
                    <td class="bs-checkbox "><input data-index="2" name="btSelectItem" type="checkbox"></td>
                    <td>03</td>
                    <td>Ghiyat</td>
                    <td>i need bigger weapon</td>
                </tr>

                <tr>
                    <td class="bs-checkbox "><input data-index="2" name="btSelectItem" type="checkbox"></td>
                    <td>03</td>
                    <td>Ghiyat</td>
                    <td>i need bigger weapon</td>
                </tr>

                <tr>
                    <td class="bs-checkbox "><input data-index="2" name="btSelectItem" type="checkbox"></td>
                    <td>03</td>
                    <td>Ghiyat</td>
                    <td>i need bigger weapon</td>
                </tr>

                <tr>
                    <td class="bs-checkbox "><input data-index="2" name="btSelectItem" type="checkbox"></td>
                    <td>03</td>
                    <td>Ghiyat</td>
                    <td>i need bigger weapon</td>
                </tr>

                <tr>
                    <td class="bs-checkbox "><input data-index="2" name="btSelectItem" type="checkbox"></td>
                    <td>03</td>
                    <td>Ghiyat</td>
                    <td>i need bigger weapon</td>
                </tr>

                <tr>
                    <td class="bs-checkbox "><input data-index="2" name="btSelectItem" type="checkbox"></td>
                    <td>03</td>
                    <td>Ghiyat</td>
                    <td>i need bigger weapon</td>
                </tr>

                <tr>
                    <td class="bs-checkbox "><input data-index="2" name="btSelectItem" type="checkbox"></td>
                    <td>03</td>
                    <td>Ghiyat</td>
                    <td>i need bigger weapon</td>
                </tr>

                <tr>
                    <td class="bs-checkbox "><input data-index="2" name="btSelectItem" type="checkbox"></td>
                    <td>03</td>
                    <td>Ghiyat</td>
                    <td>i need bigger weapon</td>
                </tr>

                <tr>
                    <td class="bs-checkbox "><input data-index="2" name="btSelectItem" type="checkbox"></td>
                    <td>03</td>
                    <td>Ghiyat</td>
                    <td>i need bigger weapon</td>
                </tr>

                <tr>
                    <td class="bs-checkbox "><input data-index="2" name="btSelectItem" type="checkbox"></td>
                    <td>03</td>
                    <td>Ghiyat</td>
                    <td>i need bigger weapon</td>
                </tr>

            </tbody>
        </table>
    </div>


    <script src="https://unpkg.com/bootstrap-table@1.22.1/dist/bootstrap-table.min.js"></script>
    <script src="/MoreOption.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.0/bootstrap-table.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/editable/bootstrap-table-editable.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/export/bootstrap-table-export.js"></script>
    <script src="//rawgit.com/hhurz/tableExport.jquery.plugin/master/tableExport.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/filter-control/bootstrap-table-filter-control.js"></script>
</body>
</html>