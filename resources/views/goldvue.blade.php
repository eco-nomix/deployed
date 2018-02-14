<!DOCTYPE html>
<html>
<head>
    <title></title>

</head>
<body>
    <div id='root'>
       <ul>
            <li v-for="name in names" v-text="name"></li>
       </ul>

       <input v-model="newName" type="text">
       <button @click="addName">Add Name</button>
    </div>


        <script src='https://unpkg.com/vue@2.1.3/dist/vue.js'></script>



    <script>



    var app = new Vue({
        el: '#root',
        data: {
          newName: '',
          names: ['Joe', 'Mary', 'Jane', 'Jack']
        },
        methods: {
            addName() {
               this.names.push(this.newName);
               this.newName = '';
            }
        }


    });

    document.querySelector('#button').addEventListener('click',()=>{
        let name = document.querySelector('#input').value;
        app.names.push(name.value);
        name.value='';
    });

    </script>
</body>
</html>