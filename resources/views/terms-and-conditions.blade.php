<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.15.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <title>Lens Pitch App</title>
</head>

<body class="text-gray-800 antialiased">
    <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 ">
        <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
            <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
                <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white" href="{{url('/')}}"><img src="images/logo.png" width="80" height="80" /></a><button class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none" type="button"
                    onclick="toggleNavbar('example-collapse-navbar')">
            <i class="text-white fas fa-bars"></i>
          </button>
            </div>
            <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden" id="example-collapse-navbar">
                <ul class="flex flex-col lg:flex-row list-none mr-auto">
                    <li class="flex items-center">


                    </li>
                </ul>
                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto pt-2">
                    <li class="flex items-center">

                    </li>
                    <li class="flex items-center">

                    </li>
                    <li class="flex items-center">

                    </li>
                    <li class="flex items-center">
                    @if (Route::has('login'))
                
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-white dark:text-white underline"><button class="bg-yellow-500 text-white text-1xl active:bg-gray-100 text-s uppercase px-6 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3" type="button" style="transition: all 0.15s ease 0s;">
                 Dashboard
              </button></a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-white dark:text-white underline"><button class="bg-yellow-500 text-white text-1xl active:bg-gray-100 text-s uppercase px-6 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3" type="button" style="transition: all 0.15s ease 0s;">
                 Log-In
              </button></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="mx-8 text-white dark:text-gray-500 text-1xl">Sign-Up</a>
                        @endif
                    @endauth
                
@endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="relative pt-10 pb-32 flex content-center items-center justify-center" style="min-height: 55vh;">
            <div class="absolute top-0 w-full h-full bg-center bg-cover" style='background-image: url("images/header_img_newest.jpg");'>
                <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
            </div>
            <div class="container relative mx-auto">
                <div class="items-center flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                        <div class="pr-12">
                            <h3 class="text-white font-semibold text-5xl mt-18">
                                Your career success story starts here
                            </h3>

                        </div>
                    </div>
                </div>
            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden" style="height: 70px;">

            </div>
        </div>
        

        
      <!-- search engine here -->


    


    </main>
    <footer class="relative bg-gray-300 py-12">

    <section class="md:w-6/12; my-auto mx-10 bg-white p-4 rounded-md">
    <h3 class="text-3xl mx-5 my-8">Terms and Conditions</h3>
    <br/>
    <p class="text-md m-5">This is LensPitch!</p>
    <p class="text-md m-5">These Terms of Use (or "Terms") govern your use of Lenspitch, except where we expressly state that separate terms (and not these) apply and provide information about the Lenspitch Service (the "Service"), outlined below. When you create an Lenspitch account or use Lenspitch, you agree to these terms. </p>
    <p class="text-md m-5">The Lenspitch Service is one of the Jobshow Product provided to you by Jobshow International These Terms of Use therefore constitute an agreement between you and Jobshow International.</p>
    <p class="text-md m-5 font-bold">ARBITRATION NOTICE: YOU AGREE THAT DISPUTES BETWEEN YOU AND US WILL BE RESOLVED BY BINDING, INDIVIDUAL ARBITRATION AND YOU WAIVE YOUR RIGHT TO PARTICIPATE IN A CLASS ACTION LAWSUIT OR CLASS-WIDE ARBITRATION. WE EXPLAIN SOME EXCEPTIONS AND HOW YOU CAN OPT OUT OF ARBITRATION BELOW.</p>
    
    <h3 class="text-2xl mx-5 my-8">The Lenspitch Service</h3>
    <p  class="text-md m-5">We agree to provide you with the Lenspitch Service. The Service includes all of the Lenspitch products, features, applications, services, technologies, and software that we provide to advance Lenspitch 's mission: To bring you closer to the people you desire to market your skills and abilities to. The Service is made up of the following aspects:</p>
    <ul class="pl-6 text-md m-5">
        <li class="py-4"><span class="font-bold">•	Offering personalized opportunities to create, connect, communicate, discover, and share.</span><br/>People are different. We want to strengthen your relationships through video resume and use that information to help you create, find, join, and share others. Part of that is creating content, features, offers, and accounts you might be interested in, and offering ways for you to experience Lenspitch, based on things you and others do on and off Lenspitch, while job hunting. </li>
        <li class="py-4"><span class="font-bold">•	Fostering a positive, inclusive, and safe environment.</span><br/>We develop and use tools and offer resources to users that help to make their experiences positive and inclusive, including when we think they might need help. We also have teams and systems that work to combat abuse and violations of our Terms and policies, as well as harmful and deceptive behavior. We use all the information we have-including your information-to try to keep our platform secure. We also may share information about misuse or harmful content with other Jobshow affiliates or law enforcement. </li>
        <li class="py-4"><span class="font-bold">•	Developing and using technologies that help us consistently serve our growing community.</span><br/>A big part of our Service is creating and using cutting-edge technologies that help us personalize, protect, and improve our Service on an incredibly large scale for a broad global community. Technologies like artificial intelligence and machine learning give us the power to apply complex processes across our Service. Automated technologies also help us ensure the functionality and integrity of our Service. </li>
        <li class="py-4"><span class="font-bold">•	Providing consistent and seamless experiences across other Jobshow Company Products.</span><br/>LensPitch is part of the Jobshow International, which share technology, systems, insights, and information-including the information we have about you, in order to provide services that are better, safer, and more secure. We also provide ways to interact across the Jobshow Products that you use, and designed systems to achieve a seamless and consistent experience across the Jobshow Company Products. </li>
        
        <li class="py-4"><span class="font-bold">•	Ensuring access to our Service.</span><br/>To operate our global Service, we must store and transfer data across our systems around the world, including outside of your country of residence. The use of this global infrastructure is necessary and essential to provide our Service. This infrastructure may be owned or operated by Jobshow International or affiliates.</li>
        <li class="py-4"><span class="font-bold">•	Connecting you with brands, products, and services in ways you care about.</span><br/>We use data from LensPitch and other Jobshow Company Products, as well as from third-party partners, to show you ads, offers, and other sponsored content that we believe will be meaningful to you. And we try to make that content as relevant. </li>
        <li class="py-4"><span class="font-bold">•	Research and innovation.</span><br/>We use the information we have to study our Service and collaborate with others on research to make our Service better and contribute to the well-being of our users. </li> 
    </ul>
    <h3 class="text-2xl mx-5 my-8">How we make Money</h3>
    <p class="text-md m-5">Instead of paying to use LensPitch, by using the Service covered by these Terms, you acknowledge that we can show you ads that businesses and organizations pay us to promote on and off the Jobshow Company Products. We use your personal data, such as information about your activity and interests, to show you ads that are more relevant to you.</p>
    <p class="text-md m-5">We show you relevant and useful ads without telling advertisers who you are. We don’t sell your personal data. We allow advertisers to tell us things like their business goal and the kind of audience they want to see their ads. We then show their ad to people who might be interested.</p>
    <p class="text-md m-5">We also provide advertisers with reports about the performance of their ads to help them understand how people are interacting with their content on and off LensPitch. For example, we provide general demographic and interest information to advertisers to help them better understand their audience. We don’t share information that directly identifies you (information such as your name or email address that by itself can be used to contact you or identifies who you are) unless you give employer or investor acceptance to chat you up while they interview you on job or entrepreneurial idea you want to market.  </p>
    <h3 class="text-2xl mx-5 my-8">Your Commitments</h3>
    <p class="text-md m-5">In return for our commitment to provide the Service, we require you to make the below commitments to us.</p>
    <p class="text-md m-5"><b>You Can Use LensPitch</b><br/> We want our Service to be as open and inclusive as possible, but we also want it to be safe, secure, and in accordance with the law. So, we need you to commit to a few restrictions to be part of the LensPitch family.
</p>
<ul class="pl-6 text-md m-5">
        <li class="py-4">•	You must be at least 17 years old.</li>
        <li class="py-4">•	You must not be prohibited from receiving any aspect of our Service under applicable laws or engaging in payments related Services if you are on an applicable denied party listing.</li>
        <li class="py-4">•	We must not have previously disabled your account for violation of law or any of our policies.</li>
    </ul>
    <p class="text-md m-5"><b>Ways You Can't Use LensPitch.</b><br/> Providing a safe and open Service for a broad community requires that we all do our part.</p>
    <ul class="pl-6 text-md m-5">
        <li class="py-4">•	<b>You can't impersonate others or provide inaccurate information.</b><br/>
You don't have to disclose your identity on LensPitch, but you must provide us with accurate and up to date information (including registration information), which may include providing personal data. Also, you may not impersonate someone or something you aren't, and you can't create an account for someone else unless you have their express permission.
</li>
        <li class="py-4">•	<b>You can't do anything unlawful, misleading, or fraudulent or for an illegal or unauthorized purpose.</b></li>
        <li class="py-4">•	<b>You can't violate (or help or encourage others to violate) </b></li>
        <li class="py-4">•	<b>You can't do anything to interfere with or impair the intended operation of the Service.</b><br/>
This includes misusing any reporting, dispute, or appeals channel, such as by making fraudulent or groundless reports or appeals.
</li>
        <li class="py-4">•	<b>You can't attempt to create accounts or access or collect information in unauthorized ways.</b>
This includes creating accounts or collecting information in an automated way without our express permission.
</li>
        <li class="py-4">•	<b>You can’t sell, license, or purchase any account or data obtained from us or our Service.</b>
This includes attempts to buy, sell, or transfer any aspect of your account (including your username); solicit, collect, or use login credentials or badges of other users; or request or collect LensPitch usernames, passwords, or misappropriate access tokens.
</li>
        <li class="py-4">•	<b>You can't post someone else’s private or confidential information without permission or do anything that violates someone else's rights, including intellectual property rights (e.g., copyright infringement, trademark infringement, counterfeit, or pirated goods).</b>
You may use someone else's works under exceptions or limitations to copyright and related rights under applicable law. You represent your own or have obtained all necessary rights to the content you post or share. 
</li>
        <li class="py-4">•	<b>You can’t modify, translate, create derivative works of, or reverse engineer our products or their components.</b></li>
    

        <li class="py-4">•	<b>You can't use a domain name or URL in your username without our prior written consent.</b></li>

</ul>
    <p class="text-md m-5"><b>Permissions You Give to Us.</b> As part of our agreement, you also give us permissions that we need to provide the Service.</p>
    <ul class="pl-6 text-md m-5">
    <li class="py-4">•	<b>We do not claim ownership of your content, but you grant us a license to use it.</b>
Nothing is changing about your rights in your content. We do not claim ownership of your content that you upload on or through the Service and you are free to share your content with anyone else, wherever you want. However, we need certain legal permissions from you (known as a “license”) to provide the Service. When you share, post, or upload content that is covered by intellectual property rights (like photos or videos) on or in connection with our Service, you hereby grant to us a non-exclusive, royalty-free, transferable, sub-licensable, worldwide license to host, use, distribute, modify, run, copy, publicly perform or display, translate, and create derivative works of your content (consistent with your privacy and application settings). This license will end when your content is deleted from our systems. You can delete content individually or all at once by deleting your account. 
 </li>
    <li class="py-4">•	<b>Permission to use your username, profile picture, and information about your relationships and actions with accounts, ads, and sponsored content.</b>
You give us permission to show your username, profile picture, and information about your actions (such as likes) or relationships (such as follows) next to or in connection with accounts, ads, offers, and other sponsored content that you follow or engage with that are displayed on Jobshow Products, without any compensation to you. For example, we may show that you liked a sponsored post created by a brand that has paid us to display its ads on LensPitch. As with actions on other content and follows of other accounts, actions on sponsored content, and follows of sponsored accounts can be seen only by people who have permission to see that content or follow. 
</li>
    <li class="py-4">•	<b>You agree that we can download and install updates to the Service on your device.</b></li>
    </ul>
    <p class="text-md m-5"><b>Additional Rights We Retain</b></p>
    <ul class="pl-6 text-md m-5">
    <li class="py-4">•	If you select a username or similar identifier for your account, we may change it if we believe it is appropriate or necessary (for example, if it infringes someone's intellectual property or impersonates another user).</li>
    <li class="py-4">•	If you use content covered by intellectual property rights that we have and make available in our Service (for example, images, designs, videos, or sounds we provide that you add to content you create or share), we retain all rights to our content (but not yours).</li>
    <li class="py-4">•	You can only use our intellectual property and trademarks, or similar marks as expressly permitted with our prior written permission.</li>
    <li class="py-4">•	You must obtain written permission from us or under an open-source license to modify, create derivative works of, decompile, or otherwise attempt to extract source code from us.</li>
</ul>
    <br/>
    <p class="text-md m-5"><b>Content Removal and Disabling or Terminating Your Account</b></p>
    <ul class="pl-6 text-md m-5">
        <li class="py-4">•	We can remove any content or information you share on the Service if we believe that it violates these Terms of Use, our policies or we are permitted or required to do so by law. We can refuse to provide or stop providing all or part of the Service to you (including terminating or disabling your access to our services and products immediately to protect our community or services, or if you create risk or legal exposure for us, violate these Terms of Use or our policies, if you repeatedly infringe other people's intellectual property rights, or where we are permitted or required to do so by law. We can also terminate or change the Service, remove, or block content or information shared on our Service, or stop providing all or part of the Service if we determine that doing so is reasonably necessary to avoid or mitigate adverse legal or regulatory impacts on us. If you believe your account has been terminated in error, or you want to disable or permanently delete your account, consult our HELP link.  When you request to delete content or your account, the deletion process will automatically begin no more than 30 days after your request. It may take up to 90 days to delete content after the deletion process begins. While the deletion process for such content is being undertaken, the content is no longer visible to other users, but remains subject to these Terms of Use and our Data Policy. After the content is deleted, it may take us up to another 90 days to remove it from backups and disaster recovery systems.</li>
        <li class="py-4">•	Content will not be deleted within 90 days of the account deletion or content deletion process beginning in the following situations:</li>
        <li class="py-4">	•	where your content has been used by others in accordance with this license and they have not deleted it (in which case this license will continue to apply until that content is deleted); or</li>
        <li class="py-4">	•	where deletion within 90 days is not possible due to technical limitations of our systems, in which case, we will complete the deletion as soon as technically feasible: or</li>
        <li class="py-4">   •	where deletion would restrict our ability to:</li>
        <li class="py-4 pl-8">	•	investigate or identify illegal activity or violations of our terms and policies (for example, to identify or investigate misuse of our products or systems).</li>
        <li class="py-4 pl-8">  •	protect the safety and security of our products, systems, and users.</li>
        <li class="py-4 pl-8">  •	comply with a legal obligation, such as the preservation of evidence; or</li>
        <li class="py-4 pl-8">  •	comply with a request of a judicial or administrative authority, law enforcement, or a government agency.</li>
        <li class="py-4">   •	in which case, the content will be retained for no longer than is necessary for the purposes for which it has been retained (the exact duration will vary on a case-by-case basis).</li>
        <li class="py-4">•	If you delete or we disable your account, these Terms shall terminate as an agreement between you and us, but this section and the section below called "Our Agreement and What Happens if We Disagree" will still apply even after your account is terminated, disabled, or deleted.</li>

        <li class="py-4"> </li>
        <li class="py-4"> </li>
    </ul>
    <h3 class="text-2xl mx-5 my-8">Our Agreement and Incase We Disagree</h3>
    <p class="text-md m-5"><b>Our Agreement</b></p>
    <ul class="pl-6 text-md m-5">
        <li class="py-4">•	If any aspect of this agreement is unenforceable, the rest will remain in effect.</li>
        <li class="py-4">•	Any amendment or waiver to our agreement must be in writing and signed by us. If we fail to enforce any aspect of this agreement, it will not be a waiver.</li>
        <li class="py-4">•	We reserve all rights not expressly granted to you.</li>
</ul>
<p class="text-md m-5"><b>Rights Under this Agreement.</b></p>
<ul class="pl-6 text-md m-5">
        <li class="py-4">•	Our past, present, and future affiliates and agents, including LensPitch, can invoke our rights under this agreement in the event they become involved in a dispute. Otherwise, this agreement does not give rights to any third parties.</li>
        <li class="py-4">•	You cannot transfer your rights or obligations under this agreement without our consent.</li>
        <li class="py-4">•	Our rights and obligations can be assigned to others. For example, this could occur if our ownership changes (as in a merger, acquisition, or sale of assets) or by law.</li>
</ul>

<p class="text-md m-5"><b>Who Is Responsible incase Something Happens.</b></p>
<ul class="pl-6 text-md m-5">
        <li class="py-4">•	Our Service is provided "as is," and we can't guarantee it will be safe and secure or will work perfectly all the time. TO THE EXTENT PERMITTED BY LAW, WE ALSO DISCLAIM ALL WARRANTIES, WHETHER EXPRESS OR IMPLIED, INCLUDING THE IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, TITLE, AND NON-INFRINGEMENT.</li>
        <li class="py-4">•	We also don’t control what people and others do or say, and we aren’t responsible for their (or your) actions or conduct (whether online or offline) or content (including unlawful or objectionable content). We also aren’t responsible for services and features offered by other people or companies, even if you access them through our Service.</li>
        <li class="py-4">•	Our responsibility for anything that happens on the Service (also called "liability") is limited as much as the law will allow. If there is an issue with our Service, we can't know what all the possible impacts might be. You agree that we won't be responsible ("liable") for any lost profits, revenues, information, or data, or consequential, special, indirect, exemplary, punitive, or incidental damages arising out of or related to these Terms, even if we know they are possible. This includes when we delete your content, information, or account. Our aggregate liability arising out of or relating to these Terms will not exceed the amount you have paid us in the past twelve months.</li>
        <li class="py-4">•	You agree to defend (at our request), indemnify, and hold us harmless from and against any claims, liabilities, damages, losses, and expenses, including without limitation, reasonable attorney's fees and costs, arising out of or in any way connected with these Terms or your use of the Service. You will cooperate as required by us in the defense of any claim. We reserve the right to assume the exclusive defense and control of any matter subject to indemnification by you, and you will not in any event settle any claim without our prior written consent.</li>
        
</ul>
<p class="text-md m-5"><b>Ways We Will Handle Disputes</b></p>
<ul class="pl-6 text-md m-5">
        <li class="py-4">•	Except as provided below, <b>you and we agree that any cause of action, legal claim, or dispute between you and us arising out of or related to these Terms or LensPitch ("claim(s)") must be resolved by arbitration on an individual basis. Class actions and class arbitrations are not permitted;</b> you and we may bring a claim only on your own behalf and cannot seek relief that would affect other users. If there is a final judicial determination that any particular claim (or a request for particular relief) cannot be arbitrated in accordance with this provision's limitations, then only that claim (or only that request for relief) may be brought in court. All other claims (or requests for relief) remain subject to this provision.</li>
        <li class="py-4">•	Instead of using arbitration, you or we can bring claims in your local "small claims" court, if the rules of that court will allow it. If you don't bring your claims in small claims court (or if you or we appeal a small claims court judgment to a court of general jurisdiction), then the claims must be resolved by binding, individual arbitration. The Arbitration Association will administer all arbitrations under its Consumer Arbitration Rules. You and we expressly waive a trial by jury.<br/>
The following claims don't have to be arbitrated and may be brought in court: disputes related to intellectual property (like copyrights and trademarks), violations of our Platform Policy, or efforts to interfere with the Service or engage with the Service in unauthorized ways (for example, automated ways). In addition, issues relating to the scope and enforceability of the arbitration provision are for a court to decide.<br/>
This arbitration provision is governed by the Federal Arbitration Act.
You can opt out of this provision within 30 days of the date that you agreed to these Terms. To opt out, you must send your name, residence address, username, email address or phone number you use for your LensPitch account, and a clear statement that you want to opt out of this arbitration agreement, and you must send them here: Jobshow International. ATTN: </li>
        <li class="py-4">•	Before you commence arbitration of a claim, you must provide us with a written Notice of Dispute that includes your name, residence address, username, email address or phone number you use for your LensPitch account, a detailed description of the dispute, and the relief you seek. Any Notice of Dispute you send to us should be mailed to Jobshow International., ATTN: LensPitch Arbitration Filing, P.O Box 1284, Piscataway, NJ 08855. Before we commence arbitration, we will send you a Notice of Dispute to the email address you use with your LensPitch account, or other appropriate means. If we are unable to resolve a dispute within thirty (30) days after the Notice of Dispute is received, you or we may commence arbitration.</li>
        <li class="py-4">•	You agree to defend (at our request), indemnify, and hold us harmless from and against any claims, liabilities, damages, losses, and expenses, including without limitation, reasonable attorney's fees and costs, arising out of or in any way connected with these Terms or your use of the Service. You will cooperate as required by us in the defense of any claim. We reserve the right to assume the exclusive defense and control of any matter subject to indemnification by you, and you will not in any event settle any claim without our prior written consent.</li>
        <li class="py-4">•	We will pay all arbitration filing fees, administration and hearing costs, and arbitrator fees for any arbitration we bring or if your claims seek less than $500 and you timely provided us with a Notice of Dispute. For all other claims, the costs and fees of arbitration shall be allocated in accordance with the arbitration provider's rules, including rules regarding frivolous or improper claims.</li>
        <li class="py-4">•	For any claim that is not arbitrated or resolved in small claims court, you agree that it will be resolved exclusively in the state court located in Middlesex County. You also agree to submit to the personal jurisdiction of either of these courts for the purpose of litigating any such claim.</li>
        <li class="py-4">•	The laws of New Jersey, to the extent not preempted by or inconsistent with federal law, will govern these Terms and any claim, without regard to conflict of law provisions. </li> 
</ul>
    <p class="text-md m-5"><b>Unsolicited Material.</b><br/>We always appreciate feedback or other suggestions but may use them without any restrictions or obligation to compensate you for them, and are under no obligation to keep them confidential.</p>
    <p class="text-md m-5"><b>Terms Are Ongoing </b>We may change our Service and policies, and we may need to make changes to these Terms so that they accurately reflect our Service and policies. Unless otherwise required by law, we will notify you (for example, through our Service) before we make changes to these Terms and give you an opportunity to review them before they go into effect. Then, if you continue to use the Service, you will be bound by the updated Terms. If you do not want to agree to these or any updated Terms, you can delete your account, NOW. </p>
    <br/><br/>
    <p class="text-md m-5">Revised: December 20, 2021</p>
</section>
</footer>
    

<footer class="relative bg-gray-600 pt-8 pb-6">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20" style="height: 80px;">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
          <polygon
            class="text-gray-300 fill-current"
            points="2560 0 2560 100 0 100"
          ></polygon>
        </svg>
        </div>
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap text-white">
                <div class="w-full lg:w-6/12 px-4">
                    <h4 class="text-3xl font-semibold text-white"></h4>
                    <h5 class="text-lg mt-0 mb-2 text-gray-300">
                       
                    </h5>
                    <div class="mt-6 flex justify-start">
                        <a href="https://www.facebook.com/profile.php?id=100075706996813" target="_blank"><img src="{{ asset('images/facebook.png') }}" class="w-10 h-10 mr-2"/></a>
                        <a href="https://twitter.com/LENSPITCHS" target="_blank"><img src="{{ asset('images/twittter.png') }}" class="w-10 h-10 mr-2"/></a>
                        <a href="https://www.instagram.com/lenspitchs/" target="_blank"><img src="{{ asset('images/instagram.png') }}" class="w-10 h-10"/></a>
                    </div>
                    
                </div>
                <div class="w-full lg:w-6/12 px-4">
                    <div class="flex flex-wrap items-top mb-6">
                        <div class="w-full lg:w-4/12 px-4 ml-auto">
                            <span class="block uppercase text-white text-sm font-semibold mb-2"><a href="{{ url('/aboutus') }}">About Us</a></span
                >
                <ul class="list-unstyled">
                  <li>
                   &nbsp;
                  </li>
                  <li class="mb-4">
                    <a
                      class="text-white hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="{{ url('/privacy_policy') }}"
                      >Privacy Policy</a
                    >
                  </li>
                  <li class="mb-4">
                    <a
                      class="text-white hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="{{ url('/terms_conditions') }}"
                      >Terms and Conditions</a
                    >
                  </li>
                  <li>
                    &nbsp;
                  </li>
                </ul>
              </div>
              
            </div>
          </div>
        </div>
        <hr class="my-6 border-gray-400" />
        <div
          class="flex flex-wrap items-center md:justify-between justify-center"
        >
          <div class="w-full md:w-4/12 px-4 mx-auto text-center">
            <div class="text-sm text-white font-semibold py-1">
              © 2021 The Jobshow International
              
            </div>
          </div>
        </div>
      </div>
    </footer>
   
  </body>
  <script>
    function toggleNavbar(collapseID) {
      document.getElementById(collapseID).classList.toggle("hidden");
      document.getElementById(collapseID).classList.toggle("block");
    }
  </script>
  <!--Add the following script at the bottom of the web page (before </body></html>)-->
<script type="text/javascript">function add_chatinline(){var hccid=16771271;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
add_chatinline();</script>
</html>