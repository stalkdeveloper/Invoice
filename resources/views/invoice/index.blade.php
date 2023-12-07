<!DOCTYPE html>
<html>

@include('invoice.main.head')
<body>
    <div class="main_wrap">
        @include('invoice.main.sidebar')
        @include('invoice.main.header')
        <div class="content-wrap">
            <div class="inner-content">
                <div class="outer-width" data-aos="fade-down">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Invoice name</th>
                            <th scope="col">Subtitle</th>
                            <th scope="col">Invoice Number</th>
                            <th scope="col">Invoice Date</th>
                            <th scope="col">Due date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</body>
@include('invoice.main.js')
<script>