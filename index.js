panel.plugin("mountbatt/persons-block", {
  blocks: {
    persons: `
      	<div @dblclick="open">
<<<<<<< HEAD
				<template if="content.heading.length === 0">
					<div class="k-text"><strong>{{ content.heading }}</strong></div>
				</template>
		    <template v-if="content.persons.length === 0">
		    	<div class="k-text" v-text="$t('field.blocks.persons.empty')"></div>
		    </template>
		    <template v-else>
		        <ul class="k-text" v-for="item in content.persons">
							<li class="">&rarr; {{ item.text }}</li>
						</ul>
=======
		    <template v-if="content.accordion.length === 0">
		    	<details open><summary v-text="$t('field.blocks.accordion.name')"></summary><span v-text="$t('field.blocks.accordion.empty')"></span></details>
		    </template>
		    <template v-else>
		        <details open v-for="item in content.accordion">
						<summary v-if="item.summary">{{ item.summary }}</summary>
		        <summary v-else>Details</summary>
		        <div v-html="item.details" class="k-text"></div>
		        </details>
						<div v-text="content.accordion.schema"></div>
>>>>>>> 5961f4408918795e28d0e569b80805749b7ddba9
		    </template>
		</div>
    `
  }
}); 