<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        #d1{
            height: 300px;
            background:red;
        }
    </style>
</head>
<body>
<div id="d1"></div>
<a href="http://www.baidu.com" target="123">123</a>
<button onclick="handel()">提交</button>
<script>
    let files=[];
    let d1=document.getElementById('d1');
    document.documentElement.ondragover=e=>{
        e.preventDefault();
    };
    d1.addEventListener('drop',e=>{
       e.preventDefault();
       files=e.dataTransfer.files;
       let urls=window.URL.createObjectURL(files[0]);
       let videos=`<video src="${urls}" preload="auto">`;
       console.log(videos);
       d1.innerHTML=videos;
    });
    function handel(){
        let forms=new FormData();
        forms.append('files',files[0]);
        let xhr=new XMLHttpRequest();
        xhr.open('post','1.php',true);
        xhr.onreadystatechange=()=>{
            if(xhr.readyState===4 && xhr.Status===200){
                let request=JSON.parse(xhr.responseText);
                console.log(request)
            }
        };
        xhr.setRequestHeader('X-Request-With','XMLHttpRequest');
        xhr.send(forms)
    }
</script>
</body>
</html>