<?php
class PostTableSeeder extends DatabaseSeeder {

/**
* Run the database seeds.
*
* @return void
*/
    public function run()
    {
        DB::table('posts')->delete();

        $post1 = new Post();
        $post1->title = 'Test';
        $post1->message = 'This is a Test!!';
        $post1->user_id = 1;
        $post1->save();

        $post2 = new Post();
        $post2->title = 'Well done bacon, well done.';
        $post2->message = 'Bacon ipsum dolor sit amet rump voluptate bacon do enim drumstick. In cow ground round landjaeger magna sint beef non filet mignon. Beef ribs beef pork belly leberkas, pork cupidatat ad nulla in tempor t-bone hamburger proident qui rump. Eu velit kevin cillum ullamco shankle dolore enim in pork chop exercitation minim. Cillum chuck aliquip, filet mignon aliqua leberkas veniam pancetta strip steak irure prosciutto ribeye in ut anim. Turducken voluptate swine enim, magna irure brisket ea reprehenderit exercitation.';
        $post2->user_id = 1;
        $post2->save();

        $post3 = new Post();
        $post3->title = 'Veganism by bacon';
        $post3->message = 'Bacon ipsum dolor sit amet rump voluptate bacon do enim drumstick. In cow ground round landjaeger magna sint beef non filet mignon. Beef ribs beef pork belly leberkas, pork cupidatat ad nulla in tempor t-bone hamburger proident qui rump. Eu velit kevin cillum ullamco shankle dolore enim in pork chop exercitation minim. Cillum chuck aliquip, filet mignon aliqua leberkas veniam pancetta strip steak irure prosciutto ribeye in ut anim. Turducken voluptate swine enim, magna irure brisket ea reprehenderit exercitation.';
        $post3->user_id = 2;
        $post3->save();

        $post4 = new Post();
        $post4->title = 'RRB';
        $post4->message = 'Bacon ipsum dolor sit amet rump voluptate bacon do enim drumstick. In cow ground round landjaeger magna sint beef non filet mignon. Beef ribs beef pork belly leberkas, pork cupidatat ad nulla in tempor t-bone hamburger proident qui rump. Eu velit kevin cillum ullamco shankle dolore enim in pork chop exercitation minim. Cillum chuck aliquip, filet mignon aliqua leberkas veniam pancetta strip steak irure prosciutto ribeye in ut anim. Turducken voluptate swine enim, magna irure brisket ea reprehenderit exercitation.';
        $post4->user_id = 1;
        $post4->save();


    }

}