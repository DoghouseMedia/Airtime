{include file="statusbar.tpl"}
{include file="menu.tpl"}
{if $USER.userid}    {* somebody logged in? *}
   
    {if $showScheduler}
        <table  style="margin:0px;padding:0px;" border="0">
         <tr>
             <td valign="top" style="margin:0px;padding:0px;border:0">
                 {include file="scheduler/main.tpl"}
             </td>
             <td valign="top" style="margin:0px;padding:0px;border:0">
                 <div class="content">
                 {include file="scheduler/calendar.tpl"}
                 {if $SCRATCHPAD}
                     {include file="scratchpad/main.tpl"}
                 {/if}
                 </div>
             </td>


         </tr>
        </table>
    {else}
        {if $fileList}
            {include file="file/list.tpl"}
        {/if}

        {if $showLibrary}
            {include file="library/main.tpl"}
        {/if}

        {if $showSubjects}
            {include file="subjects/main.tpl"}
        {/if}

        {if $showFile}
            {include file="file/data.tpl"}
        {/if}

        {if $editItem}
            {include file="file/edit.tpl"}
        {/if}

        {if $changeStationPrefs}
            {include file="system/stationprefs.tpl"}
        {/if}

        {if $PL_simpleManagement}
            {include file="playlist/main.tpl"}
        {/if}

        {if $showBackup}
            {include file="backup/backup.tpl"}
        {/if}
         
        {if $act === 'BACKUP' || $act === 'BACKUP.setTarget'}
            {include file="backup/backup.tpl"}
        {/if}
        
        {if  $act === 'BACKUP.schedule'}
            {include file="backup/schedule.tpl"}
        {/if}
        
        {if $act === 'RESTORE'}
            {include file="backup/restore.tpl"}
        {/if}
        
        {if $act === 'SCHEDULER.export'}
            {include file="scheduler/export.tpl"}
        {/if}
        
        {if $act === 'SCHEDULER.import'}
            {include file="scheduler/import.tpl"}
        {/if}
        
        {if $act === 'twitter.settings'}
            {include file="twitter/settings.tpl"}
        {/if}
        
        <div class="content" id="cc_right_panel">
            {if $simpleSearchForm && !showLibrary}
                {include file="library/simpleSearchForm.tpl"}
            {/if}
            
            {if $showSidePL && !$PL_simpleManagement }
                {include file="playlist/sidebar.tpl"}
            {/if}

            {if $SCRATCHPAD}
                {include file="scratchpad/main.tpl"}
            {/if}     
            
        </div>
    {/if}

{/if}