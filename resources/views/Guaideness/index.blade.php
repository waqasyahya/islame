@extends("layouts.app")
@section('title') Guaideness  @endsection

@section('page-header')
<!-- PAGE HEADER -->
<div class="page-header mt-5-7">
    <div class="page-leftheader">
        <h4 class="page-title mb-0">Guaideness</h4>
        <ol class="breadcrumb mb-2">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fa-solid fa-chart-tree-map mr-2 fs-12"></i>Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="#"> Guaideness </a></li>
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
                <h5 class="modal-title" id="createBookingModalLabel">Create Guaideness </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <form class="needs-validation row" id="add_Guaideness_form" novalidate="">
                @csrf
                <input name="id" type="text" hidden>
                <div class="modal-body ">
                    <div class="row mx-2">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label class="form-label">NameEng1</label>
                        <input name="NameEng1" type="text" class="form-control" placeholder="NameEng1" required="">
                        <div class="invalid-feedback"> NameEng1 is Required.</div>
                            </div>
                        </div>
                    <div class="col-md-12">
                        <label class="form-label">NameArabic1</label>
                        <input name="NameArabic1" type="text" class="form-control" placeholder="NameArabic1" required="">
                        <div class="invalid-feedback"> NameArabic1 is Required.</div>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">NameUrdu1</label>
                        <input name="NameUrdu1" type="text" class="form-control" placeholder="NameUrdu1" required="">
                        <div class="invalid-feedback">NameUrdu1  is Required.</div>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">youtube_videos</label>
                        <input name="youtube_videos" type="text" class="form-control" placeholder="youtube_videos" required="">
                        <div class="invalid-feedback"> youtube_videos is Required.</div>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">DescriptionUrdu</label>
                        <input name="Description" type="text" class="form-control" placeholder="Description" required="">
                        <div class="invalid-feedback"> Description is Required.</div>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">DescriptionEng</label>
                        <input name="Description" type="text" class="form-control" placeholder="Description" required="">
                        <div class="invalid-feedback"> Description is Required.</div>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">detaillesson_id</label>
                        <input name="detaillesson_id" type="text" class="form-control" placeholder="detaillesson_id" required="">
                        <div class="invalid-feedback"> detaillesson_id is Required.</div>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">read_id</label>
                        <input name="read_id" type="text" class="form-control" placeholder="read_id" required="">
                        <div class="invalid-feedback"> read_id is Required.</div>
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
$("#add_Guaideness_form").submit(function(e) {
    e.preventDefault();
    var form = document.forms["add_Guaideness_form"];
    if (form.checkValidity() === true) {
        var id = document.forms["add_Guaideness_form"]["id"].value;
        var NameEng1 = document.forms["add_Guaideness_form"]["NameEng1"].value;
        var NameArabic1 = document.forms["add_Guaideness_form"]["NameArabic1"].value;
        var NameUrdu1 = document.forms["add_Guaideness_form"]["NameUrdu1"].value;
        var youtube_videos = document.forms["add_Guaideness_form"]["youtube_videos"].value;
        var DescriptionUrdu = document.forms["add_Guaideness_form"]["DescriptionUrdu"].value;
        var DescriptionEng = document.forms["add_Guaideness_form"]["DescriptionEng"].value;
        var detaillesson_id = document.forms["add_Guaideness_form"]["detaillesson_id"].value;
        var read_id = document.forms["add_Guaideness_form"]["read_id"].value;

        $.ajax({
            type: "GET",
            url: "{{route('Guaideness.store')}}",
            data: {
                id: id,
                NameEng1: NameEng1,
                NameArabic1: NameArabic1,
                NameUrdu1: NameUrdu1,
                youtube_videos:  youtube_videos,
                DescriptionEng:  DescriptionEng,
                DescriptionUrdu:  DescriptionUrdu,
                detaillesson_id:  detaillesson_id,
                read_id:  read_id,

                "_token": "{{ csrf_token() }}"
            },
            success: function(response) {
                if (response.status == "200") {
                    $("#add_property_modal").modal("hide");
                    document.forms["add_Guaideness_form"].reset();
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
        url: "{{ route('Guaideness.readbyid', ['id' => '']) }}/" + id,
        dataType: "json",
        data: {
            "_token": "{{ csrf_token() }}"
        },
        success: function(response) {
            document.forms["add_Guaideness_form"]["id"].value = response.id;
            document.forms["add_Guaideness_form"]["NameEng1"].value = response.NameEng1;
            document.forms["add_Guaideness_form"]["NameArabic1"].value = response.NameArabic1;
            document.forms["add_Guaideness_form"]["NameUrdu1"].value = response.NameUrdu1;
            document.forms["add_Guaideness_form"]["youtube_videos"].value = response.youtube_videos;
            document.forms["add_Guaideness_form"]["DescriptionUrdu"].value = response.DescriptionUrdu;
            document.forms["add_Guaideness_form"]["DescriptionEng"].value = response.DescriptionEng;
            document.forms["add_Guaideness_form"]["detaillesson_id"].value = response.detaillesson_id;
            document.forms["add_Guaideness_form"]["read_id"].value = response.read_id;



        },
        error: function(e, f, g) {
            console.log(e, f, g);
        }
    });
}
function purpose_delete(id) {
    $.ajax({
        type: "GET",
        url: "{{ route('Guaideness.delete', ['id' => '']) }}/" + id,
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
            Guaideness
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
                    <th>NameEng1</th>
                    <th>NameArabic1</th>
                    <th>NameUrdu1</th>
                    <th>youtube_videos</th>
                    <th>DescriptionUrdu</th>
                    <th>DescriptionEng</th>
                    <th>detaillesson_id</th>
                    <th>read_id</th>
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
                url: "{{route('Guaideness.read')}}",
                type: "GET",
                data: {
                    "_token": "{{ csrf_token() }}"
                }
            },
            "columns": [{
                data: "id"
            },
             {
                data: "NameEng1"
            },
            {
                data: "NameArabic1"
            },
            {
                data: "NameUrdu1"
            },
            {
                data: "youtube_videos"
            },
            {
                data: "DescriptionUrdu"
            },
            {
                data: "DescriptionEng"
            },
            {
                data: "detaillesson_id"
            },
            {
                data: "read_id"
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
