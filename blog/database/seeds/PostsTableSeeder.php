<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post;
        $post->post_title = 'No, thank you, said Professor McGonagall ';
        $post->post_text = 'My dear Professor, surely a sensible person like yourself can call him by his name? All this You-Know-Who nonsense -- for eleven years I have been trying to persuade people to call him by his proper name: Voldemort.  Professor McGonagall flinched, but Dumbledore, who was unsticking two lemon drops, seemed not to notice. It all gets so confusing if we keep saying You-Know-Who" I have never seen any reason to be frightened of saying Voldemorts name.';
        $post->save();
        
        $other_post = new Post;
        $other_post->post_title = 'An heres Harry! said the giant.';
        $other_post->post_text = 'Harry looked up into the fierce, wild, shadowy face and saw that the beetle eyes were crinkled in a smile.Las\' time I saw you, you was only a baby, said the giant. Yeh look a lot like yer dad, but yeh\'ve got yer mom\'s eyes. Uncle Vernon made a funny rasping noise. I demand that you leave at once, sir! he said. You are breaking and entering!';
        $other_post->save();
    }
}
