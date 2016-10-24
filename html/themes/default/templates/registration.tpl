<section id="registration" class="container-fluid section">
    <form id="registration-form" method="post" autocomplete="off">
      <input type="hidden" id="mobile-format" value="{$setting_data.number_code}">
		{foreach $infos as $info}
		{if $info.section->type == 21}
		<div data-step="questionnaire" class="section-content registration-step row">
			<div class="col-xs-12 col-sm-offset-1 col-sm-10">
				<div class="row">
					<h1>{$info.section->name}</h1>
					{foreach $info.additional as $item}
					<div class="row type-21 required" data-name="radio_{$item->id}">
					  <p>{$item->question}</p>
					  {if $item->param_1}
					  <div class="form-group">
						<div class="radio-inline">
						  <input id="{$item->id}_1" data-correct="{$item->value == 1}" type="radio" name="radio_{$item->id}" value="1"/>
						  <label for="{$item->id}_1"><span></span>{$item->param_1}</label>
						</div>
					  </div>
					  {/if}

					  {if $item->param_2}
					  <div class="form-group">
						<div class="radio-inline">
						  <input id="{$item->id}_2" type="radio" data-correct="{$item->value == 2}" name="radio_{$item->id}" value="2"/>
						  <label for="{$item->id}_2"><span></span>{$item->param_2}</label>
						</div>
					  </div>
					  {/if}

					  {if $item->param_3}
					  <div class="form-group">
						<div class="radio-inline">
						  <input id="{$item->id}_3" type="radio" data-correct="{$item->value == 3}" name="radio_{$item->id}" value="3"/>
						  <label for="{$item->id}_3"><span></span>{$item->param_3}</label>
						</div>
					  </div>
					  {/if}

					  {if $item->param_4}
					  <div class="form-group">
						<div class="radio-inline">
						  <input id="{$item->id}_4" type="radio" data-correct="{$item->value == 4}" name="radio_{$item->id}" value="4"/>
						  <label for="{$item->id}_4"><span></span>{$item->param_4}</label>
						</div>
					  </div>
					  {/if}

            			<div class="alert alert-danger" style="display:none;">{$language.incorect_answer}</div>
					</div>
					{/foreach}

					<p class="comment">{$language.consent_message}</p>
				</div>
				<button class="btn btn-link btn-next">{$language.approval}:</button>
				{if $info@iteration > 1}
				<a class="btn btn-link btn-prev back-btn" onclick="prevStep()">&larr; {$language.back}</a>
				{/if}
			</div>
		</div>
		{else if $info.section->style == 4}
		
		{else if $info.section->style == 3}
		<div data-step="disease" class="section-content registration-step row">
			<div class="col-xs-12 col-sm-offset-1 col-sm-10">
			  <div class="row">
				<h1>{$info.content.0.title}</h1>
				{$info.content.0.content}

				<div class="form-inline row">
				  <div class="form-group">
					<div class="checkbox-inline">
					  <input id="HavePrioritzedDiseases" type="checkbox" name="HavePrioritzedDiseases">
					  <label for="HavePrioritzedDiseases"><span></span>{$language.no_disease}</label>
					</div>
				  </div>
				  <div id="diseasesListContainer">
					<div id="selectedDiseasesContainer"></div>
					<div class="form-group">
					  <select id="diseasesSelect" name="disease" class="form-control combobox">
						<option disabled selected value> -- {$language.select_disease} -- </option>
							{foreach $disease as $item}
						<option value="{$item->id}">{$item->title}</option>
							  {/foreach}
					  </select>
					  <button id="addDiseaseButton" class="btn btn-link">{$language.add}</button>
					</div>
					<div class="add-nlisted-disease-wrap selected-disease">
					  <div class="form-group unlisted-disease">
						<div class="input-group">
						  <input type="text" value="" placeholder="Insert Unlisted Disease" class="form-control">
						</div>
						<button id="addNotListedDiseaseButton" class="btn btn-link">{$language.add}</button>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
              
              
              
              
              <input type="hidden" name="nemid" id="nemid" value="">
              <div class="form-group contact-toggler">
				  <div class="checkbox-inline">
					<input id="contact_info" type="checkbox" name="contact_info" />
					<label for="contact_info"><span></span>{$language.enter_contacts}</label>
				  </div>
				</div>
              <div class="row" id="contact-info-optional" style="display:none;">
			  <h1>{$language.contact_info}</h1>
			  <div class="row">
				<div class="form-horizontal col-xs-12 col-sm-6">
				  <div class="form-group">
					<label for="email">{$language.email}</label>
					<input id="email" type="text" name="email" class="form-control">
				  </div>
				  <div class="form-group">
					<label for="emailAgain">{$language.email_again}</label>
					<input id="emailAgain" type="text" name="emailAgain" class="form-control">
				  </div>
				  <div class="form-group">
					<label for="phone">{$language.phone}</label>
					<input id="phone" type="text" name="phone" class="form-control">
				  </div>
				  <div class="form-group">
					<label for="phoneAgain">{$language.phone_again}</label>
					<input id="phoneAgain" type="text" name="phoneAgain" class="form-control">
				  </div>
				</div>
			  </div>
			  <h1>{$language.storebox_account}</h1>
			  <div class="row">
				<div class="form-horizontal col-xs-12">
				  <div class="form-group">
					<div class="radio-inline">
					  <input id="isStoreboxAccountY" type="radio" name="isStoreboxAccount" value="1" checked/>
					  <label for="isStoreboxAccountY"><span></span>{$language.yes}</label>
					</div>
				  </div>
				  <div id="storeboxAccount" class="row">
					<div class="form-group col-xs-12">
					  <div class="checkbox-inline">
						<input id="isSome" type="checkbox" name="isSome" />
						<label for="isSome"><span></span>{$language.same_as_above}</label>
					  </div>
					</div>
					<div id="storeboxAccountInfo" class="col-xs-12 col-sm-6">
					  <div class="form-group">
						<label for="storeboxEmail">{$language.storebox_email}</label>
						<input id="storeboxEmail" type="text" name="storeboxEmail" class="form-control">
					  </div>
					  <div class="form-group">
						<label for="storeboxEmailAgain">{$language.storebox_email_again}</label>
						<input id="storeboxEmailAgain" type="text" name="storeboxEmailAgain" class="form-control">
					  </div>
					  <div class="form-group">
						<label for="storeboxPhone">{$language.storebox_tel}</label>
						<input id="storeboxPhone" type="text" name="storeboxPhone" class="form-control">
					  </div>
					  <div class="form-group">
						<label for="storeboxPhoneAgain">{$language.storebox_tel_again}</label>
						<input id="storeboxPhoneAgain" type="text" name="storeboxPhoneAgain" class="form-control">
					  </div>
					</div>
				  </div>
				  <div class="form-group">
					<div class="radio-inline">
					  <input id="isStoreboxAccountN" type="radio" name="isStoreboxAccount" value="0"/>
					  <label for="isStoreboxAccountN"><span></span>{$language.no}</label>
					</div>
					<p>{$language.storebox_email_notification}</p>
				  </div>
				</div>
			  </div>
              </div>
			  <h1>{$language.consent}</h1>
			  <div class="row">
				<div class="form-group">
				  <div class="checkbox-inline">
					<input id="acceptDedidentifedDataAccessed" type="checkbox" name="acceptDedidentifedDataAccessed" />
					<label for="acceptDedidentifedDataAccessed"><span></span>{$language.accept_text}</label>
				  </div>
				</div>
				<div class="form-group">
				  <div class="checkbox-inline">
					<input id="contatMeIfProjectExpanded" type="checkbox" name="contatMeIfProjectExpanded" />
					<label for="contatMeIfProjectExpanded"><span></span>{$language.contact_me}</label>
				  </div>
				</div>
				<div class="form-group">
				  <div class="checkbox-inline">
					<input id="sendNewsletters" type="checkbox" name="sendNewsletters" />
					<label for="sendNewsletters"><span></span>{$language.newslatter_text}</label>
				  </div>
				</div>
			  </div>
			  <button class="btn btn-link btn-submit">{$language.sign_nemid} →</button>
              
			  <a class="btn btn-link btn-prev back-btn" onclick="prevStep()">&larr; {$language.back}</a>
			</div>
		</div>
        <div data-step="contact-information" class="section-content registration-step row">
			
		  </div>
		<div data-step="final" class="section-content registration-step row">
			<div class="col-xs-12 col-sm-offset-1 col-sm-10">
			  <div class="row">
				<h1>{$info.content.0.title}</h1>
				{$info.content.0.content}
			  </div>
			  <button class="btn btn-link btn-next">{$language.next} →</button>
			  <a class="btn btn-link btn-prev back-btn" onclick="prevStep()">&larr; {$language.back}</a>
			</div>
		</div>
		{else}
		<div data-step="{$info@iteration}" class="section-content registration-step {if $info@iteration == 1}active{/if} row">
			<div class="col-xs-12 col-sm-offset-1 col-sm-10">
				<div class="row">
					<h1>{$info.content.0.title}</h1>

				  {if $info.section->style == 5}
				  <div class="row">
					<div class="col-sm-6">
					  {include file="slider.tpl"}
					</div>
					<div class="col-sm-6">
					  {$info.content.0.content}
					</div>
				  </div>
				  {else}
					{$info.content.0.content}
				  {/if}
				</div>
				<button class="btn btn-link btn-next">{$language.continue} →</button>
				{if $info@iteration > 1}
				<a class="btn btn-link btn-prev back-btn" onclick="prevStep()">&larr; {$language.back}</a>
				{/if}
			</div>
		</div>
		{/if}
	  	{/foreach}
      
      <div data-step="errors" class="section-content registration-step row">
        <div class="col-xs-12 col-sm-offset-1 col-sm-10">
          <h1>{$language.error_title}</h1>
          <p>{$language.questionnaire_error}</p>

          <button class="btn btn-link btn-restart">{$language.start_again}</button>
        </div>
      </div>
    </form>
  </section>
