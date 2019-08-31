@extends("layouts.app")

@section("content")
    <div class="position-relative">
        <!-- shape Hero -->
        <section class="section section-lg section-shaped" style=" padding-bottom: 0;">
            <div class="shape shape-style-1 shape-primary">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </section>
        <!-- 1st Hero Variation -->
    </div>
    <section>
        <div class="container">
            <div class="title_terms text-center">
                <h2 style="margin-top: 20px">Terms of Use</h2>
            </div>

            <h3>Welcome to the Quantar website </h3>

            <p>Qantar is a platform that develops and curates online competitions that source and promote the best data science solutions to
                pressing problems across Emerging Markets. The following terms and conditions, together with the relevant rules applicable to each Competition,
                govern your access to and use of www.qantaurr.co, including any content, functionality and services offered.</p>

            <p>Please read the Terms of Use carefully before you use the Website. By using the Website, you accept and agree to be bound and abide by these Terms of Use, our Privacy Policy
                found at [insert link to privacy policy], and the relevant Competition Rules.</p>

            <p>You must be at least 18 years of age to use the Quantar Website. Alternatively, you must be duly represented by your parent, or legal
                guardian. If you do not meet this requirement, you must not access or use the Website.</p>

            <h4>Amendments</h4>

            <p>We may revise and update these Terms of Use from time to time in our sole discretion. All amendments to these Terms of Use are effective immediately.</p>
            <p>Your continued use of the Website following the posting of revised Terms of Use means that you accept and agree to the amendments. You are expected to check this page from time to time so you are aware of any changes.</p>

            <h4>Competitions</h4>
            <p>Users may host a Competition on the Website for other users to participate in. Data Hosts will be subject to a separate contract
                governing their hosting of a Competition on the Website.
                You may not use or attempt to use the Website to host any game of chance.</p>
            <p>The Host may not compete in its own hosted Competition and any Entrant User from Host User’s organization, or
                affiliated with the Host User, shall be ineligible to receive a prize.</p>
            <p>Competitions are open to data scientists worldwide, however, certain Competitions may have geographic restrictions and only residents of certain areas may
                be eligible to be ranked and to win. This will be stated in the relevant Competition rules.</p>
            <p>Competitions are run according to Competition Rules that describe participation guidelines, the datasets to be used, the prize awarded to the winners, and when such prize will be awarded. The Competition Rules must
                comply with all applicable laws and these Terms of Use. The Host User and Entrant User must comply with all Competition Rules.</p>
            <p>Entrant Users can submit several solutions during a Competition. Any limit to the number of submissions allowed for a single
                Competition will be stated in the specific Competition Rules. A predetermined subset of each submission, based on the test
                set the Entrant User downloaded, is ranked automatically by accuracy on the Quantar platform, and the Entrant User is ranked
                accordingly on the public “leader board”. The specific algorithm employed to assess accuracy of submissions will be specified in
                the Competition Rules, as well as the percentage of the test set used to rank submissions on the public “leader board”, i.e. before
                the close of the Competition.</p>
            <p>At the close of the Competition, submissions are scored against the entire test set based on accuracy.</p>
            <p>You acknowledge and agree that Quantar may, without any obligation to do so, remove or disqualify an Entrant User, a Host User or a Competition if Quantar believes that such Entrant User,
                Competition or Host User are in violation of these Terms of Use.</p>
            <p>Quantar has no obligation to mediate disputes between users (for example, between an Entrant User and a Host User) or between users and any third party. When you host or
                participate in a Competition, you release Quantar
                from claims, damages, and demands of any kind arising out of or in connection with such disputes.</p>

            <h4>We Own The Winning Solutions</h4>

            <p>If your data science solution receives a Competition prize ("winning solution") , you shall be required to submit your winning solution
                code to us for verification and you hereby agree to assign all worldwide rights of copyright in and to such winning solution to Quantar
                (and/or the Host User, as nominated by us) with effect from the date of the submission.</p>
            <p>The Entrant User hereby waives any moral rights in and to the winning solution code (including but not limited to any rights to claim authorship of
                the code and any rights to object to any distortion, mutilation or other modification of the code) in favour of Quantaur
                (or the Host User, as nominated by Quantaur) and Quantaur’s successors in title.</p>
            <p>The Entrant User warrants that the winning solution code is original, that it doesn’t infringe the rights of any third party and that the Entrant User is legally entitled to assign
                ownership of all rights of copyright in and to the winning solution code to Quantaur (or the Host User, as nominated by Quantaur).</p>

            <p>User Content</p>

            <p>The Website may contain forums, bulletin boards, message boards, user profiles, and other interactive features (collectively, the "Services") that allow users to post, submit, publish,
                display or transmit to other users or other persons content or materials (collectively, "User Content") on or through the Website.</p>
            <p>All User Content must comply with these Terms of Use.</p>
            <p>Any User Content posted to the Website will be considered non-confidential and non-proprietary information. By providing any User Content on the Website, you grant us a
                royalty-free license and right to use the User Content. By ‘use’ we mean use, copy, display, distribute, modify, translate, reformat, incorporate and promote distribute
                and otherwise disclose to third parties any such material for any purpose.</p>
            <p>You understand and acknowledge that you are responsible for any User Content you submit or contribute, and you have full
                responsibility for such content, including its legality, accuracy and appropriateness.</p>

            <h4>Standards of Use</h4>

            <p style="margin: 0; font-size: 18px">These standards apply to any use of the Services. Without limiting the foregoing, in using the Services and accessing the Website, you may not:</p>
            <ul>
                <li style="margin-left: 30px"> - violate any part of these Terms of Use;</li>
                <li style="margin-left: 30px"> - be harmful, threatening, discriminatory, abusive, defamatory, indecent, vulgar, profane, obscene, defamatory, racist, sexist, homophobic,
                    hateful or otherwise objectionable, or invasive of another person's privacy;</li>
                <li style="margin-left: 30px">- be illegal, or violate any law or regulation;</li>
                <li style="margin-left: 30px">- attempt to impersonate another person or entity;</li>
                <li style="margin-left: 30px">- access or use the account of another user without that user's express permission;</li>
                <li style="margin-left: 30px">- "hack", or access without permission, our proprietary or confidential records, records of another user, or records of anyone else,
                    nor "hack" or gain access to the Website in order to manipulate, or modify any content on the Website, including Competition leader
                    boards and rankings posted on the Website;</li>
                <li style="margin-left: 30px">- violate any contract or fiduciary relationship (for example, by disclosing proprietary or confidential information in breach of any non-disclosure agreement);</li>
                <li style="margin-left: 30px">- decompile, reverse engineer, disassemble or otherwise attempts to derive source code from the Website, it being recorded that
                    any content downloaded from the Website shall only be used for the legitimate purpose of building and submitting a Competition
                    solution, and/or, where stipulated by Quantaur, for educational purposes;</li>
                <li style="margin-left: 30px">- remove, circumvent, disable, damage or otherwise interferes with security-related features,
                    or features that enforce limitations on use of the Website;</li>
                <li style="margin-left: 30px">- collect, access, or store personal information about other users of the Website;</li>
                <li style="margin-left: 30px">- facilitate User Content being created or submitted by a bot; and/or
                    attempt to do any of the foregoing.
                </li>
            </ul>
            <br>

            <p style="margin: 0; font-size: 18px">You agree not to use the Website:</p>
            <ul>
                <li style="margin-left: 30px">- in any way that violates any applicable local, national, or international law or regulation;
                    to send, knowingly obtain, transfer, upload, download, use or re-use any material which does not comply with the Terms of Use;
                </li>
                <li style="margin-left: 30px">- to transmit, or procure the sending of, any marketing or advertising material, including any "junk mail", "chain letter" or
                    "spam" or any other similar solicitation;</li>
                <li style="margin-left: 30px">- to participate in any other conduct that limits or interferes with anyone’s use or enjoyment of the Website, or which may harm Quantaur
                    or other users of the Website.</li>
            </ul>
            <br>

            <p style="margin: 0; font-size: 18px">In addition to the above, you agree not to:</p>
            <ul>
                <li style="margin-left: 30px">- use the Website in any way that could restrict, overload, damage, or impair the Website;</li>
                <li style="margin-left: 30px">- use any manual process to monitor or replicate any of the material on the Website or for any other unauthorised purpose;</li>
                <li style="margin-left: 30px">- introduce any viruses, Trojan horses, worms, or other material which is malicious or technologically harmful;</li>
                <li style="margin-left: 30px">- attempt to gain unauthorised access to, interfere with, damage or disrupt any parts of the Website, the server on which the Website is stored, or any server, computer or database connected to the Website; </li>
                <li style="margin-left: 30px">- or attack the Website via a denial-of-service attack or a distributed denial-of-service attack.</li>
            </ul>
            <br>

            <h4>Intellectual Property</h4>
            <p>The Website and its entire contents, features and functionality are owned by the Company, its licensors or other providers of such material.</p>
            <p>You must not reproduce, distribute, modify, create derivative works of, publicly display, publicly perform, republish, download, store or transmit any of the material on our
                Website, except as allowed or required by these Terms of Use.</p>

            <p style="margin: 0; font-size: 18px">Accordingly, you must not:</p>
            <ul>
                <li style="margin-left: 30px">- modify copies of any materials from the Website;</li>
                <li style="margin-left: 30px">- use any illustrations, photographs, video or audio sequences or any graphics separately from the accompanying text;</li>
                <li style="margin-left: 30px">- or delete or alter any copyright, trademark or other proprietary rights notices from copies of
                    materials from the Website.</li>
            </ul>

            <p>If you print, copy, modify, download or otherwise use or provide any other person with access to any part of the Website in
                breach of these Terms of Use, your right to use the Website will cease immediately and you must, at our option, return or
                destroy any copies of the materials you have made. No right, title or interest in or to the Website or any content on the Website
                is transferred to you, and all rights not expressly granted are reserved by the Company. Any use of the Website not expressly
                permitted by these Terms of Use is a breach of these Terms of Use and may violate copyright, trademark and other laws.</p>
            <p>The Company name, Quantaur, the Company logo and all related names, logos, product and service names, designs and slogans are
                trademarks of the Company or its affiliates or licensors. You must not use such marks without the prior written permission of the
                Company. All other names, logos, product and service names, designs and slogans on the Website are the trademarks of their respective
                owners.</p>

            <h4>Quantar Jobs Board</h4>
            <p>Quantaur Jobs Board These terms apply to Quantaur users who wish to make use of the Quantaur jobs board.</p>
            <p>If you post a job on the Quantaur jobs board you agree to the following: You may only post jobs that relate to the fields
                of data science and/or data analytics. You warrant and agree that you will not submit any job posting that: does not comply with applicable
                local, national and international laws, including laws relating to labour and employment, equal employment opportunity and employment
                eligibility requirements, data privacy, data access and use, and intellectual property; or contains inaccurate, false, or misleading information.</p>
            <p>Quantaur does not control or vet any information or listing posted on the jobs board, nor do we verify the accuracy or correctness of any job offer or listing.</p>
            <p>It is the responsibility of the user to ensure that jobs advertised are genuine, are not published for the purpose of scamming and do not infringe any discriminatory or employment laws.</p>
            <p>Quantaur may remove any job posting at any time.</p>

            <h4>Access to the Website and Account Security</h4>
            <p>From time to time, the Company may restrict access to parts of, or the entire Website. We will not be liable if for any reason all or any part of the
                Website is unavailable at any time or for any period.</p>
            <p>You are responsible for making all arrangements necessary for you to have access to the Website, and for ensuring that all persons
                who access the Website through your internet connection are aware of these Terms of Use and comply with them.</p>
            <p>You must treat your user name and password as confidential, and not disclose it to any other person or entity. You acknowledge that your
                account is personal to you and agree not to provide any other person with access to any portion of the Website using your user name,
                password or other security information. You agree to notify us immediately of any unauthorised access to or use of your user name or
                password or any other breach of security.</p>


        <h4>Monitoring</h4>
        <p>We do not undertake to review material before it is posted on the Website and cannot ensure prompt removal of objectionable material after
            it has been posted. Accordingly, we assume no liability for any action or inaction regarding transmissions, communications or content
            provided by any user or third party. We have no liability or responsibility to anyone for performance or non-performance of the
            activities described in this section.</p>

        <h4>Copyright Infringement</h4>
        <p>If you believe that any User Content violates your copyright, please email us at ??</p>

        <h4>Reliance on Information Posted</h4>
        <p>The content on the Website is for informational purposes only. The Company disclaims any liability for any information that may
            have become outdated since the last time the information was updated. The Company does not guarantee the validity, authenticity,
            reliability or accuracy of the content on the Website, and we disclaim all liability and responsibility arising from any reliance placed
            on such materials by you or any other visitor to the Website, or by anyone who may be informed of any of its contents.</p>
        <p>This Website includes content provided by third parties. All statements and/or opinions expressed in any third-party material, and all
            articles and responses to questions and other content, other than the content provided by the Company, are solely the opinions and the
            responsibility of the person or entity providing those materials. These materials do not necessarily reflect the opinion of the Company
            and the Company is not liable to you or any third party, for the content provided by any third parties.</p>

        <h4>Disclaimer of Warranties</h4>
        <p>Your use of the Website, its content and any services or items obtained through the Website is at your own risk.</p>
        <p>The Website, its content and any services or items obtained through the website are provided on an "as is" and "as available" basis,
            without any warranties of any kind, either express or implied. The Company disclaims all warranties of any kind, whether express or
            implied, statutory or otherwise, including but not limited to any warranties of merchantability, non-infringement and fitness for particular
            purpose.</p>
        <p>The foregoing does not affect any warranties which cannot be excluded or limited under applicable law.</p>

        <h4>Governing Law and Jurisdiction</h4>
        <p>All matters relating to the Website and these Terms of Use and any dispute or claim arising therefrom or related thereto (in each case, including
            non-contractual disputes or claims), shall be governed by and construed in accordance with the laws of [Mauritius].</p>

        <h4>Severability and Entire Agreement</h4>
        <p>If any provision of these Terms of Use is held by a court or other tribunal of competent jurisdiction to be invalid, illegal or unenforceable
            for any reason, such provision shall be eliminated or limited to the minimum extent such that the remaining provisions of the Terms of
            Use will continue in full force and effect.</p>
            <p>These Terms of Use, our Privacy Policy and, if applicable, the Competition Rules, constitute the sole and entire agreement between you and
                Quantaur with respect to the Website, and supersede all prior agreements.</p>

            <h4>Comments and Concerns</h4>
            <p>All feedback, comments, requests for technical support and other communications relating to the Website should be directed to: ???</p>
        </div>
    </section>
@endsection
