@extends("layouts.app")
@section('title') privecy  @endsection

@section('page-header')
<!-- PAGE HEADER -->
<div class="page-header mt-5-7">
    <div class="page-leftheader">
        <h4 class="page-title mb-0">privecy</h4>
        <ol class="breadcrumb mb-2">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fa-solid fa-chart-tree-map mr-2 fs-12"></i>Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="#"> privecy </a></li>
        </ol>
    </div>
</div>
<!-- END PAGE HEADER -->
@endsection
@section('content')
<!-- Add Waqas  Modal -->
<div class="modal fade" id="add_property_modal" tabindex="-1" role="dialog" aria-labelledby="createBookingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createBookingModalLabel">Create privecy </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <form class="needs-validation row" id="add_privecy_form" novalidate="">
                @csrf
                <input name="id" type="text" hidden>
                <div class="modal-body ">
                    <div class="row mx-2">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label class="form-label">main_heading</label>
                        <input name="main_heading" type="text" class="form-control" placeholder="main_heading" required="">
                        <div class="invalid-feedback"> main_heading is Required.</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                            <label class="form-label">main_paragraph1</label>
                        <input name="main_paragraph1" type="text" class="form-control" placeholder="main_paragraph1" required="">
                        <div class="invalid-feedback"> main_paragraph1 is Required.</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                            <label class="form-label">main_paragraph2</label>
                        <input name="main_paragraph2" type="text" class="form-control" placeholder="main_paragraph2" required="">
                        <div class="invalid-feedback"> main_paragraph2 is Required.</div>
                            </div>
                        </div>
                     
                        {{-- one --}}
                        <div class="col-md-12">
                            <div class="form-group">
                            <label class="form-label">heading1</label>
                        <input name="heading1" type="text" class="form-control" placeholder="heading1" required="">
                        <div class="invalid-feedback"> heading1 is Required.</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                            <label class="form-label">paragraph1</label>
                        <input name="paragraph1" type="text" class="form-control" placeholder="paragraph1" required="">
                        <div class="invalid-feedback"> paragraph1 is Required.</div>
                            </div>
                        </div>
                        {{-- two --}}
                        <div class="col-md-12">
                            <div class="form-group">
                            <label class="form-label">heading2</label>
                        <input name="heading2" type="text" class="form-control" placeholder="heading2" required="">
                        <div class="invalid-feedback"> heading2 is Required.</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                            <label class="form-label">paragraph2</label>
                        <input name="paragraph2" type="text" class="form-control" placeholder="paragraph2" required="">
                        <div class="invalid-feedback"> paragraph2 is Required.</div>
                            </div>
                        </div>
{{-- three --}}
<div class="col-md-12">
    <div class="form-group">
    <label class="form-label">heading3</label>
<input name="heading3" type="text" class="form-control" placeholder="heading3" required="">
<div class="invalid-feedback"> heading3 is Required.</div>
    </div>
</div>
{{-- four --}}
<div class="col-md-12">
    <div class="form-group">
    <label class="form-label">heading4</label>
<input name="heading4" type="text" class="form-control" placeholder="heading4" required="">
<div class="invalid-feedback"> heading4 is Required.</div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
    <label class="form-label">paragraph4</label>
<input name="paragraph4" type="text" class="form-control" placeholder="paragraph4" required="">
<div class="invalid-feedback"> paragraph4 is Required.</div>
    </div>
</div>
{{-- five --}}
<div class="col-md-12">
    <div class="form-group">
    <label class="form-label">heading5</label>
<input name="heading5" type="text" class="form-control" placeholder="heading5" required="">
<div class="invalid-feedback"> heading5 is Required.</div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
    <label class="form-label">paragraph5</label>
<input name="paragraph5" type="text" class="form-control" placeholder="paragraph5" required="">
<div class="invalid-feedback"> paragraph5 is Required.</div>
    </div>
</div>
{{-- six --}}
<div class="col-md-12">
    <div class="form-group">
    <label class="form-label">heading6</label>
<input name="heading6" type="text" class="form-control" placeholder="heading6" required="">
<div class="invalid-feedback"> heading6 is Required.</div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
    <label class="form-label">paragraph6</label>
<input name="paragraph6" type="text" class="form-control" placeholder="paragraph6" required="">
<div class="invalid-feedback"> paragraph6 is Required.</div>
    </div>
</div>
{{-- seven --}}
<div class="col-md-12">
    <div class="form-group">
    <label class="form-label">heading7</label>
<input name="heading7" type="text" class="form-control" placeholder="heading7" required="">
<div class="invalid-feedback"> heading7 is Required.</div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
    <label class="form-label">paragraph7</label>
<input name="paragraph7" type="text" class="form-control" placeholder="paragraph7" required="">
<div class="invalid-feedback"> paragraph7 is Required.</div>
    </div>
</div>
{{-- eight --}}
<div class="col-md-12">
    <div class="form-group">
    <label class="form-label">heading8</label>
<input name="heading8" type="text" class="form-control" placeholder="heading8" required="">
<div class="invalid-feedback"> heading8 is Required.</div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
    <label class="form-label">paragraph8</label>
<input name="paragraph8" type="text" class="form-control" placeholder="paragraph8" required="">
<div class="invalid-feedback"> paragraph8 is Required.</div>
    </div>
</div>
{{-- ninth --}}
<div class="col-md-12">
    <div class="form-group">
    <label class="form-label">heading9</label>
<input name="heading9" type="text" class="form-control" placeholder="heading9" required="">
<div class="invalid-feedback"> heading9 is Required.</div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
    <label class="form-label">paragraph9</label>
<input name="paragraph9" type="text" class="form-control" placeholder="paragraph9" required="">
<div class="invalid-feedback"> paragraph9 is Required.</div>
    </div>
</div>
{{-- tenth --}}
<div class="col-md-12">
    <div class="form-group">
    <label class="form-label">heading10</label>
<input name="heading10" type="text" class="form-control" placeholder="heading10" required="">
<div class="invalid-feedback"> heading10 is Required.</div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
    <label class="form-label">paragraph10</label>
<input name="paragraph10" type="text" class="form-control" placeholder="paragraph10" required="">
<div class="invalid-feedback"> paragraph10 is Required.</div>
    </div>
</div>
{{-- end --}}
                    </div>

                    <div class="modal-footer justify-content-between mt-3 ml-2">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <b-button variant="primary" v-if="!load" class="btn-lg " disabled>
                            <b-spinner small type="grow"></b-spinner>
                        </b-button>
                        <button type="submit" class="btn btn-lg btn-primary  " id="">Save </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<script>
    $('#rent_period_section').hide();

    function purposeChange(value)
    {
        if(value==1){$('#rent_period_section').show();}
        else{$('#rent_period_section').hide();}
    }
//property
$("#add_privecy_form").submit(function(e) {
    e.preventDefault();
    var form = document.forms["add_privecy_form"];
    if (form.checkValidity() === true) {
        var id = document.forms["add_privecy_form"]["id"].value;
        var main_heading = document.forms["add_privecy_form"]["main_heading"].value;
        var main_paragraph1 = document.forms["add_privecy_form"]["main_paragraph1"].value;
        var main_paragraph2 = document.forms["add_privecy_form"]["main_paragraph2"].value;
        var heading1 = document.forms["add_privecy_form"]["heading1"].value;
        var paragraph1 = document.forms["add_privecy_form"]["paragraph1"].value;
        var heading2 = document.forms["add_privecy_form"]["heading2"].value;
        var paragraph2 = document.forms["add_privecy_form"]["paragraph2"].value;
        var heading3 = document.forms["add_privecy_form"]["heading3"].value;
        var heading4 = document.forms["add_privecy_form"]["heading4"].value;
        var paragraph4 = document.forms["add_privecy_form"]["paragraph4"].value;
        var heading5 = document.forms["add_privecy_form"]["heading5"].value;
        var paragraph5 = document.forms["add_privecy_form"]["paragraph5"].value;
        var heading6 = document.forms["add_privecy_form"]["heading6"].value;
        var paragraph6 = document.forms["add_privecy_form"]["paragraph6"].value;
        var heading7 = document.forms["add_privecy_form"]["heading7"].value;
        var paragraph7 = document.forms["add_privecy_form"]["paragraph7"].value;
        var heading8 = document.forms["add_privecy_form"]["heading8"].value;
        var paragraph8 = document.forms["add_privecy_form"]["paragraph8"].value;
        var heading9 = document.forms["add_privecy_form"]["heading9"].value;
        var paragraph9 = document.forms["add_privecy_form"]["paragraph9"].value;
        var heading10 = document.forms["add_privecy_form"]["heading10"].value;
        var paragraph10 = document.forms["add_privecy_form"]["paragraph10"].value;


        $.ajax({
            type: "GET",
            url: "{{route('privecy.store')}}",
            data: {
                id: id,
                main_heading: main_heading,
                main_paragraph1: main_paragraph1,
                main_paragraph2: main_paragraph2,
                heading1:  heading1,
                paragraph1:  paragraph1,
                heading2:  heading2,
                paragraph2:  paragraph2,
                heading3:  heading3,
                heading4:  heading4,
                paragraph4:  paragraph4,
                heading5:  heading5,
                paragraph5:  paragraph5,
                heading6:  heading6,
                paragraph6:  paragraph6,
                heading7:  heading7,
                paragraph7:  paragraph7,
                heading8:  heading8,
                paragraph8:  paragraph8,
                heading9:  heading9,
                paragraph9:  paragraph9,
                heading10:  heading10,
                paragraph10:  paragraph10,
                

                "_token": "{{ csrf_token() }}"
            },
            success: function(response) {
                if (response.status == "200") {
                    $("#add_property_modal").modal("hide");
                    document.forms["add_privecy_form"].reset();
                    toastr.success("Record Save Successfully");
                    dataTable.ajax.reload();
                } else {
                    toastr.error("Operation Failed");
                }
            },
            error: function(e, f, g) {
                toastr.error("Error: " + e.responseJSON.message);
            }
        });
    } else {
        console.log("Not ok");
    }
});
</script>

<script>
// property ReadById
function privecy_read_by_id(id) {
    $.ajax({
        type: "GET",
        url: "{{ route('privecy.readbyid', ['id' => '']) }}/" + id,
        dataType: "json",
        data: {
            "_token": "{{ csrf_token() }}"
        },
        success: function(response) {
            document.forms["add_privecy_form"]["id"].value = response.id;
            document.forms["add_privecy_form"]["main_heading"].value = response.main_heading;
            document.forms["add_privecy_form"]["main_paragraph1"].value = response.main_paragraph1;
            document.forms["add_privecy_form"]["main_paragraph2"].value = response.main_paragraph2;
            document.forms["add_privecy_form"]["heading1"].value = response.heading1;
            document.forms["add_privecy_form"]["paragraph1"].value = response.paragraph1;
            document.forms["add_privecy_form"]["heading2"].value = response.heading2;
            document.forms["add_privecy_form"]["paragraph2"].value = response.paragraph2;
            document.forms["add_privecy_form"]["heading3"].value = response.heading3;
            document.forms["add_privecy_form"]["heading4"].value = response.heading4;
            document.forms["add_privecy_form"]["paragraph4"].value = response.paragraph4;
            document.forms["add_privecy_form"]["heading5"].value = response.heading5;
            document.forms["add_privecy_form"]["paragraph5"].value = response.paragraph5;
            document.forms["add_privecy_form"]["heading6"].value = response.heading6;
            document.forms["add_privecy_form"]["paragraph6"].value = response.paragraph6;
            document.forms["add_privecy_form"]["heading7"].value = response.heading7;
            document.forms["add_privecy_form"]["paragraph7"].value = response.paragraph7;
            document.forms["add_privecy_form"]["heading8"].value = response.heading8;
            document.forms["add_privecy_form"]["paragraph8"].value = response.paragraph8;
            document.forms["add_privecy_form"]["heading9"].value = response.heading9;
            document.forms["add_privecy_form"]["paragraph9"].value = response.paragraph9;
            document.forms["add_privecy_form"]["heading10"].value = response.heading10;
            document.forms["add_privecy_form"]["paragraph10"].value = response.paragraph10;




        },
        error: function(e, f, g) {
            console.log(e, f, g);
        }
    });
}
function privecy_delete(id) {
    $.ajax({
        type: "GET",
        url: "{{ route('privecy.delete', ['id' => '']) }}/" + id,
        dataType: "json",
        data: {
            "_token": "{{ csrf_token() }}"
        },
        success: function(response) {
            if (response.status == "600") {
                    toastr.success("Record Deleted Successfully");
                    dataTable.ajax.reload();
                } else {
                    toastr.error("Operation Failed");
                }
        },
        error: function(e, f, g) {
            console.log(e, f, g);
        }
    });
}

</script>
<div class="card">
    <div class="card-header ui-sortable-handle" style="cursor: move;display: table-row;">

        <h3 class="card-title">
            <i class="fas fa-bars-staggered mr-1"></i>
        privecy
        </h3>
        <div class="card-tools">
            <ul class="nav nav-pills ml-auto">
                <li class="nav-item mr-1 mt-2">
                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#add_property_modal"><i class="fas fa-plus-circle"></i> Add NEW </button>
                </li>

            </ul>
        </div>
    </div>
    <div class="card-body table-responsive ">
        <table class=" responsive datatables-basic table border-top  table cell-border compact stripe nowrap" id="example">
            <thead>
                <tr>
                    <th>id</th>
                    <th>main_heading</th>
                    <th>main_paragraph1</th>
                    <th>main_paragraph2</th>
                    <th>heading1</th>
                    <th>paragraph1</th>
                    <th>heading2</th>
                    <th>paragraph2</th>
                    <th>heading3</th>
                    <th>heading4</th>
                    <th>paragraph4</th>
                    <th>heading5</th>
                    <th>paragraph5</th>
                    <th>heading6</th>
                    <th>paragraph6</th>
                    <th>heading7</th>
                    <th>paragraph7</th>
                    <th>heading8</th>
                    <th>paragraph8</th>
                    <th>heading9</th>
                    <th>paragraph9</th>
                    <th>heading10</th>
                    <th>paragraph10</th>
                    <th>Action</th>
                    
                </tr>
            </thead>
        </table>
    </div>
</div>

<script>
    var dataTable;
    $(document).ready(function() {
        dataTable = $("#example").DataTable({
            "ajax": {
                url: "{{route('privecy.read')}}",
                type: "GET",
                data: {
                    "_token": "{{ csrf_token() }}"
                }
            },
            "columns": [{
                data: "id"
            },
             {
                data: "main_heading"
            },
            {
                data: "main_paragraph1"
            },
            {
                data: "main_paragraph2"
            },
            {
                data: "heading1"
            },
            {
                data: "paragraph1"
            },
            {
                data: "heading2"
            },
            {
                data: "paragraph2"
            },
            {
                data: "heading3"
            },
            {
                data: "heading4"
            },
            {
                data: "paragraph4"
            },
            {
                data: "heading5"
            },
            {
                data: "paragraph5"
            },
            {
                data: "heading6"
            },
            {
                data: "paragraph6"
            },
            {
                data: "heading7"
            },
            {
                data: "paragraph7"
            },
            {
                data: "heading8"
            },
            {
                data: "paragraph8"
            },
            {
                data: "heading9"
            },
            {
                data: "paragraph9"
            },
            {
                data: "heading10"
            },
            {
                data: "paragraph10"
            },













              {
                "defaultContent": '<a class="fa-solid fa-pen table-action-buttons edit-action-button" id="edit_purpose" data-bs-toggle="modal" data-bs-target="#add_property_modal" ></a><a class="fa-solid fa-trash table-action-buttons delete-action-button" id="delete_purpose"></a>'
            },



        ],
            "order": [
                [0, "desc"]
            ],


        });
        $('div.head-label').html('<h3 class="card-title mb-0">lesson</h3>');
        $("#example tbody").on("click", "#edit_purpose", function() {
            var data = dataTable.row($(this).parentsUntil("tr")).data();
            privecy_read_by_id(data.id);
            $('.addEditText').text("Edit");
        });
        $("#example tbody").on("click", "#delete_purpose", function() {
            var data = dataTable.row($(this).parentsUntil("tr")).data();
            privecy_delete(data.id);
            $('.addEditText').text("delete");
        });
    });
    </script>

</div>@endsection
