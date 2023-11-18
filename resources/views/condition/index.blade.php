@extends("layouts.app")
@section('title') condition  @endsection

@section('page-header')
<!-- PAGE HEADER -->
<div class="page-header mt-5-7">
    <div class="page-leftheader">
        <h4 class="page-title mb-0">condition</h4>
        <ol class="breadcrumb mb-2">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fa-solid fa-chart-tree-map mr-2 fs-12"></i>Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="#"> condition </a></li>
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
                <h5 class="modal-title" id="createBookingModalLabel">Create condition </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <form class="needs-validation row" id="add_condtion_form" novalidate="">
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
<div class="col-md-12">
    <div class="form-group">
    <label class="form-label">paragraph3</label>
<input name="paragraph3" type="text" class="form-control" placeholder="paragraph3" required="">
<div class="invalid-feedback"> paragraph3 is Required.</div>
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
    <label class="form-label">paragraph4_1</label>
<input name="paragraph4_1" type="text" class="form-control" placeholder="paragraph4" required="">
<div class="invalid-feedback"> paragraph4.1 is Required.</div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
    <label class="form-label">paragraph4_2</label>
<input name="paragraph4_2" type="text" class="form-control" placeholder="paragraph4" required="">
<div class="invalid-feedback"> paragraph4.2 is Required.</div>
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
    <label class="form-label">paragraph5_1</label>
<input name="paragraph5_1" type="text" class="form-control" placeholder="paragraph5" required="">
<div class="invalid-feedback"> paragraph5.1 is Required.</div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
    <label class="form-label">paragraph5_2</label>
<input name="paragraph5_2" type="text" class="form-control" placeholder="paragraph5" required="">
<div class="invalid-feedback"> paragraph5 is Required.</div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
    <label class="form-label">paragraph5_3</label>
<input name="paragraph5_3" type="text" class="form-control" placeholder="paragraph5" required="">
<div class="invalid-feedback"> paragraph5_3 is Required.</div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
    <label class="form-label">paragraph5_4</label>
<input name="paragraph5_4" type="text" class="form-control" placeholder="paragraph5_4" required="">
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
    <label class="form-label">paragraph7_1</label>
<input name="paragraph7_1" type="text" class="form-control" placeholder="paragraph7" required="">
<div class="invalid-feedback"> paragraph7 is Required.</div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
    <label class="form-label">paragraph7_2</label>
<input name="paragraph7_2" type="text" class="form-control" placeholder="paragraph7" required="">
<div class="invalid-feedback"> paragraph7_2 is Required.</div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
    <label class="form-label">paragraph7_3</label>
<input name="paragraph7_3" type="text" class="form-control" placeholder="paragraph7" required="">
<div class="invalid-feedback"> paragraph7 is Required.</div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
    <label class="form-label">paragraph7_4</label>
<input name="paragraph7_4" type="text" class="form-control" placeholder="paragraph7_4" required="">
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
    <label class="form-label">paragraph8_1</label>
<input name="paragraph8_1" type="text" class="form-control" placeholder="paragraph8_1" required="">
<div class="invalid-feedback"> paragraph_1 is Required.</div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
    <label class="form-label">paragraph8_2</label>
<input name="paragraph8_2" type="text" class="form-control" placeholder="paragraph8_2" required="">
<div class="invalid-feedback"> paragraph8_2 is Required.</div>
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
$("#add_condtion_form").submit(function(e) {
    e.preventDefault();
    var form = document.forms["add_condtion_form"];
    if (form.checkValidity() === true) {
        var id = document.forms["add_condtion_form"]["id"].value;
        var main_heading = document.forms["add_condtion_form"]["main_heading"].value;
        var main_paragraph1 = document.forms["add_condtion_form"]["main_paragraph1"].value;
        var main_paragraph2 = document.forms["add_condtion_form"]["main_paragraph2"].value;
        var heading1 = document.forms["add_condtion_form"]["heading1"].value;
        var paragraph1 = document.forms["add_condtion_form"]["paragraph1"].value;
        var heading2 = document.forms["add_condtion_form"]["heading2"].value;
        var paragraph2 = document.forms["add_condtion_form"]["paragraph2"].value;
        var heading3 = document.forms["add_condtion_form"]["heading3"].value;
        var paragraph3 = document.forms["add_condtion_form"]["paragraph3"].value;

        var heading4 = document.forms["add_condtion_form"]["heading4"].value;
        var paragraph4_1 = document.forms["add_condtion_form"]["paragraph4_1"].value;
        var paragraph4_2 = document.forms["add_condtion_form"]["paragraph4_2"].value;
        var heading5 = document.forms["add_condtion_form"]["heading5"].value;
        var paragraph5_1 = document.forms["add_condtion_form"]["paragraph5_1"].value;
        var paragraph5_2 = document.forms["add_condtion_form"]["paragraph5_2"].value;
        var paragraph5_3 = document.forms["add_condtion_form"]["paragraph5_3"].value;
        var paragraph5_4 = document.forms["add_condtion_form"]["paragraph5_4"].value;
        var heading6 = document.forms["add_condtion_form"]["heading6"].value;
        var paragraph6 = document.forms["add_condtion_form"]["paragraph6"].value;
        var heading7 = document.forms["add_condtion_form"]["heading7"].value;
        var paragraph7_1 = document.forms["add_condtion_form"]["paragraph7_1"].value;
        var paragraph7_2 = document.forms["add_condtion_form"]["paragraph7_2"].value;
        var paragraph7_3 = document.forms["add_condtion_form"]["paragraph7_3"].value;
        var paragraph7_4 = document.forms["add_condtion_form"]["paragraph7_4"].value;
        var heading8 = document.forms["add_condtion_form"]["heading8"].value;
        var paragraph8_1 = document.forms["add_condtion_form"]["paragraph8_1"].value;
        var paragraph8_2 = document.forms["add_condtion_form"]["paragraph8_2"].value;
        var heading9 = document.forms["add_condtion_form"]["heading9"].value;
        var paragraph9 = document.forms["add_condtion_form"]["paragraph9"].value;
      


        $.ajax({
            type: "GET",
            url: "{{route('condition.store')}}",
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
                paragraph3:  paragraph3,

                heading4:  heading4,
                paragraph4_1:  paragraph4_1,
                paragraph4_2:  paragraph4_2,
                heading5:  heading5,
                paragraph5_1:  paragraph5_1,
                paragraph5_2:  paragraph5_2,
                paragraph5_3:  paragraph5_3,
                paragraph5_4:  paragraph5_4,
                heading6:  heading6,
                paragraph6:  paragraph6,
                heading7:  heading7,
                paragraph7_1:  paragraph7_1,
                paragraph7_2:  paragraph7_2,
                paragraph7_3:  paragraph7_3,
                paragraph7_4:  paragraph7_4,
                heading8:  heading8,
                paragraph8_1:  paragraph8_1,
                paragraph8_2:  paragraph8_2,
                heading9:  heading9,
                paragraph9:  paragraph9,
              
                

                "_token": "{{ csrf_token() }}"
            },
            success: function(response) {
                if (response.status == "200") {
                    $("#add_property_modal").modal("hide");
                    document.forms["add_condtion_form"].reset();
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
function condition_read_by_id(id) {
    $.ajax({
        type: "GET",
        url: "{{ route('condition.readbyid', ['id' => '']) }}/" + id,
        dataType: "json",
        data: {
            "_token": "{{ csrf_token() }}"
        },
        success: function(response) {
            document.forms["add_condtion_form"]["id"].value = response.id;
            document.forms["add_condtion_form"]["main_heading"].value = response.main_heading;
            document.forms["add_condtion_form"]["main_paragraph1"].value = response.main_paragraph1;
            document.forms["add_condtion_form"]["main_paragraph2"].value = response.main_paragraph2;
            document.forms["add_condtion_form"]["heading1"].value = response.heading1;
            document.forms["add_condtion_form"]["paragraph1"].value = response.paragraph1;
            document.forms["add_condtion_form"]["heading2"].value = response.heading2;
            document.forms["add_condtion_form"]["paragraph2"].value = response.paragraph2;
            document.forms["add_condtion_form"]["heading3"].value = response.heading3;
            document.forms["add_condtion_form"]["paragraph3"].value = response.paragraph3;

            document.forms["add_condtion_form"]["heading4"].value = response.heading4;
            document.forms["add_condtion_form"]["paragraph4_1"].value = response.paragraph4_1;
            document.forms["add_condtion_form"]["paragraph4_2"].value = response.paragraph4_2;
            document.forms["add_condtion_form"]["heading5"].value = response.heading5;
            document.forms["add_condtion_form"]["paragraph5_1"].value = response.paragraph5_1;
            document.forms["add_condtion_form"]["paragraph5_2"].value = response.paragraph5_2;
            document.forms["add_condtion_form"]["paragraph5_3"].value = response.paragraph5_3;
            document.forms["add_condtion_form"]["paragraph5_4"].value = response.paragraph5_4;
            document.forms["add_condtion_form"]["heading6"].value = response.heading6;
            document.forms["add_condtion_form"]["paragraph6"].value = response.paragraph6;
            document.forms["add_condtion_form"]["heading7"].value = response.heading7;
            document.forms["add_condtion_form"]["paragraph7_1"].value = response.paragraph7_1;
            document.forms["add_condtion_form"]["paragraph7_2"].value = response.paragraph7_2;
            document.forms["add_condtion_form"]["paragraph7_3"].value = response.paragraph7_3;
            document.forms["add_condtion_form"]["paragraph7_4"].value = response.paragraph7_4;
            document.forms["add_condtion_form"]["heading8"].value = response.heading8;
            document.forms["add_condtion_form"]["paragraph8_1"].value = response.paragraph8_1;
            document.forms["add_condtion_form"]["paragraph8_2"].value = response.paragraph8_2;
            document.forms["add_condtion_form"]["heading9"].value = response.heading9;
            document.forms["add_condtion_form"]["paragraph9"].value = response.paragraph9;
          




        },
        error: function(e, f, g) {
            console.log(e, f, g);
        }
    });
}
function condition_delete(id) {
    $.ajax({
        type: "GET",
        url: "{{ route('condition.delete', ['id' => '']) }}/" + id,
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
        condition
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
                    <th>paragraph3</th>
                    <th>heading4</th>

                    <th>paragraph4_1</th>
                    <th>paragraph4_1</th>
                    <th>heading5</th>
                    <th>paragraph5_1</th>
                    <th>paragraph5_2</th>
                    <th>paragraph5_3</th>
                    <th>paragraph5_4</th>
                    <th>heading6</th>
                    <th>paragraph6</th>
                    <th>heading7</th>
                    <th>paragraph7_1</th>
                    <th>paragraph7_2</th>
                    <th>paragraph7_3</th>
                    <th>paragraph7_4</th>
                    <th>heading8</th>
                    <th>paragraph8_1</th>
                    <th>paragraph8_2</th>
                    <th>heading9</th>
                    <th>paragraph9</th>
                   
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
                url: "{{route('condition.read')}}",
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
                data: "paragraph3"
            },
            {
                data: "heading4"
            },
            {
                data: "paragraph4_1"
            },
            {
                data: "paragraph4_2"
            },
            {
                data: "heading5"
            },
            {
                data: "paragraph5_1"
            },
            {
                data: "paragraph5_2"
            },
            {
                data: "paragraph5_3"
            },
            {
                data: "paragraph5_4"
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
                data: "paragraph7_1"
            },
            {
                data: "paragraph7_2"
            },
            {
                data: "paragraph7_3"
            },
            {
                data: "paragraph7_4"
            },
            {
                data: "heading8"
            },
            {
                data: "paragraph8_1"
            },
            {
                data: "paragraph8_2"
            },
            {
                data: "heading9"
            },
            {
                data: "paragraph9"
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
            condition_read_by_id(data.id);
            $('.addEditText').text("Edit");
        });
        $("#example tbody").on("click", "#delete_purpose", function() {
            var data = dataTable.row($(this).parentsUntil("tr")).data();
            condition_delete(data.id);
            $('.addEditText').text("delete");
        });
    });
    </script>

</div>@endsection
