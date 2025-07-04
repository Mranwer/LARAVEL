@include('pack.header')

<x-message-banner msg="User signup SuccessFully"/>

<h1>hello this our service</h1>
<h2>{{$name}}</h2>
<p><?php echo $name ?></p>


<style>
        .message{
            background-color: lightgreen;
            color: green;
            padding: 3px 10px;
            border-radius: 2px;
            display: inline-block;
            margin: 10px;
        }
    </style>
