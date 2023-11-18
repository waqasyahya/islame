@extends("layouts.app")
@section('title') Lesson  @endsection

@section('page-header')
<!-- PAGE HEADER -->
<div class="page-header mt-5-7">
    <div class="page-leftheader">
        <h4 class="page-title mb-0">Lesson</h4>
        <ol class="breadcrumb mb-2">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fa-solid fa-chart-tree-map mr-2 fs-12"></i>Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="#"> Lesson </a></li>
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
                <h5 class="modal-title" id="createBookingModalLabel">Create Lesson </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <form class="needs-validation row" id="add_lesson_form" novalidate="">
                @csrf
                <input name="id" type="text" hidden>
                <div class="modal-body ">
                    <div class="row mx-2">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label class="form-label">Number</label>
                        <input name="Number" type="number" class="form-control" placeholder="Number" required="">
                        <div class="invalid-feedback"> Number is Required.</div>
                            </div>
                        </div>
                    <div class="col-md-12">
                        <label class="form-label">NameEng</label>
                        <input name="NameEng" type="text" class="form-control" placeholder="NameEng" required="">
                        <div class="invalid-feedback"> NameEng is Required.</div>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">NameUrdu</label>
                        <input name="NameUrdu" type="text" class="form-control" placeholder="NameUrdu" required="">
                        <div class="invalid-feedback">NameUrdu  is Required.</div>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">NameArabic</label>
                        <input name="NameArabic" type="text" class="form-control" placeholder="NameInt" required="">
                        <div class="invalid-feedback"> NameArabic is Required.</div>
                    </div>

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
$("#add_lesson_form").submit(function(e) {
    e.preventDefault();
    var form = document.forms["add_lesson_form"];
    if (form.checkValidity() === true) {
        var id = document.forms["add_lesson_form"]["id"].value;
        var Number = document.forms["add_lesson_form"]["Number"].value;
        var NameEng = document.forms["add_lesson_form"]["NameEng"].value;
        var NameUrdu = document.forms["add_lesson_form"]["NameUrdu"].value;
        var NameArabic = document.forms["add_lesson_form"]["NameArabic"].value;

        $.ajax({
            type: "GET",
            url: "{{route('lesson.store')}}",
            data: {
                id: id,
                Number: Number,
                NameEng: NameEng,
                NameUrdu: NameUrdu,
                NameArabic:  NameArabic,

                "_token": "{{ csrf_token() }}"
            },
            success: function(response) {
                if (response.status == "200") {
                    $("#add_property_modal").modal("hide");
                    document.forms["add_lesson_form"].reset();
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
function read_read_by_id(id) {
    $.ajax({
        type: "GET",
        url: "{{ route('lesson.readbyid', ['id' => '']) }}/" + id,
        dataType: "json",
        data: {
            "_token": "{{ csrf_token() }}"
        },
        success: function(response) {
            document.forms["add_lesson_form"]["id"].value = response.id;
            document.forms["add_lesson_form"]["Number"].value = response.Number;
            document.forms["add_lesson_form"]["NameEng"].value = response.NameEng;
            document.forms["add_lesson_form"]["NameUrdu"].value = response.NameUrdu;
            document.forms["add_lesson_form"]["NameArabic"].value = response.NameArabic;



        },
        error: function(e, f, g) {
            console.log(e, f, g);
        }
    });
}
function purpose_delete(id) {
    $.ajax({
        type: "GET",
        url: "{{ route('lesson.delete', ['id' => '']) }}/" + id,
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
            Lesson
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
                    <th>Number</th>
                    <th>NameEng</th>
                    <th>NameUrdu</th>
                    <th>NameArabic</th>
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
                url: "{{route('lesson.read')}}",
                type: "GET",
                data: {
                    "_token": "{{ csrf_token() }}"
                }
            },
            "columns": [{
                data: "id"
            },
             {
                data: "Number"
            },
            {
                data: "NameEng"
            },
            {
                data: "NameUrdu"
            },
            {
                data: "NameArabic"
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
            read_read_by_id(data.id);
            $('.addEditText').text("Edit");
        });
        $("#example tbody").on("click", "#delete_purpose", function() {
            var data = dataTable.row($(this).parentsUntil("tr")).data();
            purpose_delete(data.id);
            $('.addEditText').text("delete");
        });
    });
    </script>

</div>@endsection
