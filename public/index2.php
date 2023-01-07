<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <title>Vue Play</title>
    <script src="https://unpkg.com/vue@3"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <!--
    <style>
        html, body {
            height: 100%;
        }

        body {
            display: grid;
            place-items: center;
        }

        .text-green {
            color: green;
        }

        .text-blue {
            color: blue;
        }
    </style>
    -->
</head>

<body class="h-full grid place-items-center">

    <div id="app">
        <!--
        <p>
            <input type="text" v-model="greeting">
        </p>

        <button :class="active ? 'text-green' : 'text-blue'" @click="toggle">{{ greeting }} {{ greeting.length }}</button>
        -->

        <section v-show="pendingAssignments.length">
            <h2 class="font-bold mb-2">Pending</h2>
            <ul>
                <li v-for="asn in pendingAssignments" :key="asn.id">
                    <label> 
                        {{ asn.name }}
                        <input type="checkbox" v-model="asn.complete">
                    </label>    
            
                </li>
            </ul>
            <!--
                <pre>
                    {{ assignments }}
                </pre>  
            -->
        </section>

        <section class="mt-8" v-show="completedAssignments.length">
            <h2 class="font-bold mb-2">Completed</h2>
            <ul>
                <li v-for="asn in completedAssignments" :key="asn.id">
                    <label> 
                        {{ asn.name }}
                        <input type="checkbox" v-model="asn.complete">
                    </label>    
            
                </li>
            </ul>
        </section>

    </div>

    <script>
        //  One source of truth
        let app = {
            data() {
                return {
                    greeting : 'Hi There!',
                    active: false,
                    assignments: [
                        { name: "Finish Project", complete: false, id: 1 },
                        { name: "Read Chapter 9", complete: false, id: 2 },
                        { name: "Publish To Class", complete: false, id: 3 },
                    ]
                };
            },

            computed: {
                completedAssignments() {
                    return this.assignments.filter (assignment => assignment.complete);
                },

                pendingAssignments() {
                    return this.assignments.filter (assignment => !assignment.complete);
                },
            },

            methods: {
                toggle () {
                    this.active = !this.active;
                }
            },

            mounted () {
                setTimeout( () => {
                    this.greeting = 'Chanson Du Moi';
                }, 3000);
            }

        };

        //  Create The App
        Vue.createApp (app).mount ('#app');
    </script>

</body>

</html>