<template>
    <div id="blog_post" class="container">
      <div>
        <span class="text-right">
         
         <button v-on:click="goLogin()" class=" btn btn-info ">Login</button>
        </span>
      </div>
      <div class="row">
        <div class="col-md-6 mx-auto">
          <h1 class="text-center">Posts</h1>
         

          <table class="table">
            <tr v-for="(post) in posts" v-bind:key="post._id" v-bind:task_name="post.post_title">
              <td class="text-left">
                  <div>
                    <h3>{{post.post_title}}</h3>
                    <div><p>{{post.post_text}}</p></div>
                  </div>
              </td>
             
            </tr>
          </table>
        </div>
      </div>
    </div>
</template>

<script>
import axios from 'axios'
export default {
  data () {
    return {
      posts: [],
      id: '',
      posttitle: '',
      isEdit: false
    }
  },
  mounted () {
    this.getPosts()
  },
  methods: {
    getPosts () {
      axios({ method: 'GET', url: '/api/posts' }).then(
        result => {
          console.log(result.data)
          this.posts = result.data
        },
        error => {
          console.error(error)
        }
      )
    },
    goLogin(){
      new Vue({ el: '#login' })
      
    },
    addNewPost () {
      axios.post('/api/posts',
        { title: this.posttitle }
      ).then((res) => {
        this.posttitle = ''
        this.getPosts()
        console.log(res)
      }).catch((err) => {
        console.log(err)
      })
    },
    editPost (title, id) {
      this.id = id
      this.posttitle = title
      this.isEdit = true
    },
    updatePost () {
      axios.put(`/api/posts/${this.id}`,
        { title: this.posttitle }
      ).then((res) => {
        this.posttitle = ''
        this.isEdit = false
        this.getPosts()
        console.log(res)
      }).catch((err) => {
        console.log(err)
      })
    },
    deletePost (id) {
      axios.delete(`/api/posts/${id}`
      ).then((res) => {
        this.posttitle = ''
        this.getPosts()
        console.log(res)
      }).catch((err) => {
        console.log(err)
      })
    }
  }
}
</script>