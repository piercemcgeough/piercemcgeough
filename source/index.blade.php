@extends('_layouts.master')

@section('body')
    <div id="cv" class="instaFade">
        <div class="mainDetails">
            <div id="headshot">
                <img src="headshot.jpg" alt="Alan Smith" />
            </div>

            <div id="name">
                <h1>Pierce McGeough</h1>
                <h2>Software Developer</h2>
            </div>

            <div id="contactDetails">
                <ul>
                    <li>e: <a href="mailto:joe@bloggs.com" target="_blank">pmcgeough@hotmail.co.uk</a></li>
                    <li>w: <a href="http://www.bloggs.com">www.piercemcgeough.co.uk</a></li>
                    <li>m: 075 4668 6810</li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>

        <div id="mainArea">
            <section>
                <article>
                    <div class="sectionTitle">
                        <h1>Personal Profile</h1>
                    </div>

                    <div class="sectionContent">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor metus, interdum at scelerisque in, porta at lacus. Maecenas dapibus luctus cursus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
                    </div>
                </article>
                <div class="clear"></div>
            </section>


            <section>
                <div class="sectionTitle">
                    <h1>Work Experience</h1>
                </div>

                <div class="sectionContent">
                    <article>
                        <h2>Job Title at Company</h2>
                        <p class="subDetails">April 2011 - Present</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
                    </article>

                    <article>
                        <h2>Job Title at Company</h2>
                        <p class="subDetails">Janruary 2007 - March 2011</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
                    </article>

                    <article>
                        <h2>Job Title at Company</h2>
                        <p class="subDetails">October 2004 - December 2006</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
                    </article>
                </div>
                <div class="clear"></div>
            </section>


            <section>
                <div class="sectionTitle">
                    <h1>Key Skills</h1>
                </div>

                <div class="sectionContent">
                    <ul class="keySkills">
                        <li>A Key Skill</li>
                        <li>A Key Skill</li>
                        <li>A Key Skill</li>
                        <li>A Key Skill</li>
                        <li>A Key Skill</li>
                        <li>A Key Skill</li>
                        <li>A Key Skill</li>
                        <li>A Key Skill</li>
                    </ul>
                </div>
                <div class="clear"></div>
            </section>


            <section>
                <div class="sectionTitle">
                    <h1>Education</h1>
                </div>

                <div class="sectionContent">
                    <article>
                        <h2>College/University</h2>
                        <p class="subDetails">Qualification</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim.</p>
                    </article>

                    <article>
                        <h2>College/University</h2>
                        <p class="subDetails">Qualification</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim.</p>
                    </article>
                </div>
                <div class="clear"></div>
            </section>

        </div>
    </div>
@endsection
