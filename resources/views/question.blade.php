@extends("layout")

@section("content")
<table>
    <tr>
        <th>Id</th>
        <th>category</th>
        <th>Sub category</th>
        <th>question</th>
        <th>trueAnswer</th>
        <th>answer1</th>
        <th>answer2</th>
        <th>answer3</th>
        <th>answer4</th>
    </tr>
    @foreach ($questions as $question)
        <tr>
            <td>{{$question["id"]}}</td>
            <td>{{$question["category"]}}</td>
            <td>{{$question["subCategory"]}}</td>
            <td>{{$question["question"]}}</td>
            <td class="true">{{$question["trueAnswer"]}}</td>
            <td>{{$question["answer1"]}}</td>
            <td>{{$question["answer2"]}}</td>
            <td>{{$question["answer3"]}}</td>
            <td>{{$question["answer4"]}}</td>
        </tr>
    @endforeach
</table>
@endsection
